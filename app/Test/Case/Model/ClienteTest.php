<?php
App::uses('Cliente', 'Model');

/**
 * Cliente Test Case
 *
 */
class ClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente',
		'app.cita',
		'app.cliente_telefono',
		'app.venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cliente = ClassRegistry::init('Cliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cliente);

		parent::tearDown();
	}

}
