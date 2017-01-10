<?php
App::uses('AppController', 'Controller');
/**
 * VentaProductos Controller
 *
 * @property VentaProducto $VentaProducto
 * @property PaginatorComponent $Paginator
 */
class VentaProductosController extends AppController {

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
		$this->VentaProducto->recursive = 0;
		$this->set('ventaProductos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VentaProducto->exists($id)) {
			throw new NotFoundException(__('Invalid venta producto'));
		}
		$options = array('conditions' => array('VentaProducto.' . $this->VentaProducto->primaryKey => $id));
		$this->set('ventaProducto', $this->VentaProducto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VentaProducto->create();
			if ($this->VentaProducto->save($this->request->data)) {
				$this->Session->setFlash(__('The venta producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta producto could not be saved. Please, try again.'));
			}
		}
		$ventas = $this->VentaProducto->Venta->find('list');
		$productos = $this->VentaProducto->Producto->find('list');
		$this->set(compact('ventas','productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VentaProducto->exists($id)) {
			throw new NotFoundException(__('Invalid venta producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VentaProducto->save($this->request->data)) {
				$this->Session->setFlash(__('The venta producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venta producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VentaProducto.' . $this->VentaProducto->primaryKey => $id));
			$this->request->data = $this->VentaProducto->find('first', $options);
		}
		$ventas = $this->VentaProducto->Venta->find('list');
		$productos = $this->VentaProducto->Producto->find('list');
		$this->set(compact('ventas','productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VentaProducto->id = $id;
		if (!$this->VentaProducto->exists()) {
			throw new NotFoundException(__('Invalid venta producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->VentaProducto->delete()) {
			$this->Session->setFlash(__('The venta producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The venta producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
