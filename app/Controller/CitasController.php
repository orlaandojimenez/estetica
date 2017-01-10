<?php
App::uses('AppController', 'Controller');
/**
 * Citas Controller
 *
 * @property Cita $Cita
 * @property PaginatorComponent $Paginator
 */
class CitasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cita->recursive = 0;
		$this->set('citas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cita->exists($id)) {
			throw new NotFoundException(__('Invalid cita'));
		}
		$options = array('conditions' => array('Cita.' . $this->Cita->primaryKey => $id));
		$this->set('cita', $this->Cita->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cita->create();
			if ($this->Cita->save($this->request->data)) {
				$this->Session->setFlash(__('The cita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cita could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Cita->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cita->exists($id)) {
			throw new NotFoundException(__('Invalid cita'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cita->save($this->request->data)) {
				$this->Session->setFlash(__('The cita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cita could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cita.' . $this->Cita->primaryKey => $id));
			$this->request->data = $this->Cita->find('first', $options);
		}
		$clientes = $this->Cita->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cita->id = $id;
		if (!$this->Cita->exists()) {
			throw new NotFoundException(__('Invalid cita'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cita->delete()) {
			$this->Session->setFlash(__('The cita has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cita could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
