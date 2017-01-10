<?php
App::uses('AppController', 'Controller');
/**
 * CitaServicios Controller
 *
 * @property CitaServicio $CitaServicio
 * @property PaginatorComponent $Paginator
 */
class CitaServiciosController extends AppController {

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
		$this->CitaServicio->recursive = 0;
		$this->set('citaServicios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CitaServicio->exists($id)) {
			throw new NotFoundException(__('Invalid cita servicio'));
		}
		$options = array('conditions' => array('CitaServicio.' . $this->CitaServicio->primaryKey => $id));
		$this->set('citaServicio', $this->CitaServicio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CitaServicio->create();
			if ($this->CitaServicio->save($this->request->data)) {
				$this->Session->setFlash(__('The cita servicio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cita servicio could not be saved. Please, try again.'));
			}
		}
		$citas = $this->CitaServicio->Cita->Cliente->find('list');
		$servicios = $this->CitaServicio->Servicio->find('list');
		$this->set(compact('citas', 'servicios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CitaServicio->exists($id)) {
			throw new NotFoundException(__('Invalid cita servicio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CitaServicio->save($this->request->data)) {
				$this->Session->setFlash(__('The cita servicio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cita servicio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CitaServicio.' . $this->CitaServicio->primaryKey => $id));
			$this->request->data = $this->CitaServicio->find('first', $options);
		}
		$citas = $this->CitaServicio->Cita->Cliente->find('list');
		$servicios = $this->CitaServicio->Servicio->find('list');
		$this->set(compact('citas', 'servicios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CitaServicio->id = $id;
		if (!$this->CitaServicio->exists()) {
			throw new NotFoundException(__('Invalid cita servicio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CitaServicio->delete()) {
			$this->Session->setFlash(__('The cita servicio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cita servicio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
