<?php
App::uses('AppModel', 'Model');
/**
 * MediaLink Model
 *
 * @property Mediafile $Mediafile
 */
class MediaLink extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'mediafile_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foreign_field' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foreign_model' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Mediafile' => array(
			'className' => 'Mediafile',
			'foreignKey' => 'mediafile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
