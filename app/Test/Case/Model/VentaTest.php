<?php
App::uses('Venta', 'Model');

/**
 * Venta Test Case
 *
 */
class VentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.venta',
		'app.cliente',
		'app.cita',
		'app.cliente_telefono',
		'app.venta_producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Venta = ClassRegistry::init('Venta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Venta);

		parent::tearDown();
	}

}
