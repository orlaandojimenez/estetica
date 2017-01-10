<?php
App::uses('VentaProducto', 'Model');

/**
 * VentaProducto Test Case
 *
 */
class VentaProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.venta_producto',
		'app.venta',
		'app.cliente',
		'app.cita',
		'app.cita_servicio',
		'app.servicio',
		'app.cliente_telefono',
		'app.producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VentaProducto = ClassRegistry::init('VentaProducto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VentaProducto);

		parent::tearDown();
	}

}
