<?php
App::uses('AppModel', 'Model');
/**
 * Existencia Model
 *
 * @property Producto $Producto
 */
class Existencia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'producto_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cantidad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
