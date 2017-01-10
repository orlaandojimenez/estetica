<?php
App::uses('Existencia', 'Model');

/**
 * Existencia Test Case
 *
 */
class ExistenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.existencia',
		'app.producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Existencia = ClassRegistry::init('Existencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Existencia);

		parent::tearDown();
	}

}
