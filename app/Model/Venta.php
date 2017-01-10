<?php
App::uses('AppModel', 'Model');
/**
 * Venta Model
 *
 * @property Cliente $Cliente
 * @property VentaProducto $VentaProducto
 */
class Venta extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cliente_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'VentaProducto' => array(
			'className' => 'VentaProducto',
			'foreignKey' => 'venta_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
