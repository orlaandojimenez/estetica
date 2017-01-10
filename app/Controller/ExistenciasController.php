<?php
App::uses('AppController', 'Controller');
/**
 * Existencias Controller
 *
 * @property Existencia $Existencia
 * @property PaginatorComponent $Paginator
 */
class ExistenciasController extends AppController {

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
		$this->Existencia->recursive = 0;
		$this->set('existencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Existencia->exists($id)) {
			throw new NotFoundException(__('Invalid existencia'));
		}
		$options = array('conditions' => array('Existencia.' . $this->Existencia->primaryKey => $id));
		$this->set('existencia', $this->Existencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Existencia->create();
			if ($this->Existencia->save($this->request->data)) {
				$this->Session->setFlash(__('The existencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The existencia could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Existencia->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Existencia->exists($id)) {
			throw new NotFoundException(__('Invalid existencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Existencia->save($this->request->data)) {
				$this->Session->setFlash(__('The existencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The existencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Existencia.' . $this->Existencia->primaryKey => $id));
			$this->request->data = $this->Existencia->find('first', $options);
		}
		$productos = $this->Existencia->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Existencia->id = $id;
		if (!$this->Existencia->exists()) {
			throw new NotFoundException(__('Invalid existencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Existencia->delete()) {
			$this->Session->setFlash(__('The existencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The existencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
