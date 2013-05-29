<?php

App::uses('AppModel', 'Model');

/**
 * Event Model
 *
 * @property Edition $Edition
 * @property Location $Location
 * @property EventType $EventType
 * @property Artist $Artist
 */
class Event extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'name';
        public $order = "Event.date ASC";
        public $actsAs = array(
            'Trois.Mediafile' => array(
                'fields' => array(
                    'media'=>'embed',
                    'image' => 'file'
                )
            )
        );

        /**
         * Validation rules
         *
         * @var array
         */
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
            'date' => array(
                'datetime' => array(
                    'rule' => array('datetime'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'edition_id' => array(
                'numeric' => array(
                    'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'location_id' => array(
                'numeric' => array(
                    'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'event_type_id' => array(
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
            'Edition' => array(
                'className' => 'Edition',
                'foreignKey' => 'edition_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            ),
            'Location' => array(
                'className' => 'Location',
                'foreignKey' => 'location_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            ),
            'EventType' => array(
                'className' => 'EventType',
                'foreignKey' => 'event_type_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            )
        );

        /**
         * hasAndBelongsToMany associations
         *
         * @var array
         */
        public $hasAndBelongsToMany = array(
            'Artist' => array(
                'className' => 'Artist',
                'joinTable' => 'events_artists',
                'foreignKey' => 'event_id',
                'associationForeignKey' => 'artist_id',
                'unique' => 'keepExisting',
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'deleteQuery' => '',
                'insertQuery' => ''
            )
        );

}
