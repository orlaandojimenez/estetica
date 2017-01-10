<?php
App::uses('CitaServicio', 'Model');

/**
 * CitaServicio Test Case
 *
 */
class CitaServicioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cita_servicio',
		'app.cita',
		'app.cliente',
		'app.cliente_telefono',
		'app.venta',
		'app.venta_producto',
		'app.producto',
		'app.servicio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CitaServicio = ClassRegistry::init('CitaServicio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CitaServicio);

		parent::tearDown();
	}

}
