<?php

App::uses('AppModel', 'Model');

/**
 * Artist Model
 *
 * @property Event $Event
 */
class Artist extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'name';
        
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
        );
      




        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * hasAndBelongsToMany associations
         *
         * @var array
         */
        public $hasAndBelongsToMany = array(
            'Event' => array(
                'className' => 'Event',
                'joinTable' => 'events_artists',
                'foreignKey' => 'artist_id',
                'associationForeignKey' => 'event_id',
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
