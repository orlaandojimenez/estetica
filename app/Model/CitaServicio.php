<?php
App::uses('AppModel', 'Model');
/**
 * CitaServicio Model
 *
 * @property Cita $Cita
 * @property Servicio $Servicio
 */
class CitaServicio extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cita_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cita_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'servicio_id' => array(
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
		'Cita' => array(
			'className' => 'Cita',
			'foreignKey' => 'cita_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Servicio' => array(
			'className' => 'Servicio',
			'foreignKey' => 'servicio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
