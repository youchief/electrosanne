<?php

App::uses('AppModel', 'Model');

/**
 * Ticket Model
 *
 */
class Ticket extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'name';
        public $actsAs = array(
            'Trois.Mediafile' => array(
                'fields' => array(
                    'image' => 'file'
                )
            ),
            'Translate' => array(
                'text' => 'textTranslation',
                'name' => 'nameTranslation'
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

}
