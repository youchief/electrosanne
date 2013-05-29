<?php

App::uses('AppModel', 'Model');

/**
 * Location Model
 *
 * @property LocationType $LocationType
 * @property Event $Event
 */
class Location extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'name';
        public $order = 'Location.name ASC';

        /**
         * Validation rules
         *
         * @var array
         */
        
        public $actsAs = array(
            'Trois.Mediafile' => array(
                'fields' => array(
                    'media'=>'embed',
                    'image' => 'file'
                )
            ),
            'Translate' => array(
                'description' => 'descriptionTranslation',
            )
        );
        
        public $validate = array(
            'name' => array(
                'notempty' => array(
                    'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'location_type_id' => array(
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
            'LocationType' => array(
                'className' => 'LocationType',
                'foreignKey' => 'location_type_id',
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
            'Event' => array(
                'className' => 'Event',
                'foreignKey' => 'location_id',
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
