<?php
App::uses('Servicio', 'Model');

/**
 * Servicio Test Case
 *
 */
class ServicioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.servicio',
		'app.cita',
		'app.cliente',
		'app.cliente_telefono',
		'app.venta',
		'app.venta_producto',
		'app.producto',
		'app.cita_servicio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Servicio = ClassRegistry::init('Servicio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Servicio);

		parent::tearDown();
	}

}
