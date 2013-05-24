<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('TroisAppController', 'Trois.Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends TroisAppController {

        public $components = array(
            'Session',
            'Auth' => array(
                //'loginRedirect' => array('controller' => 'users', 'action' => 'index', 'admin' => true, 'plugin' => 'trois' ),
                //'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
                'authenticate' => array(
                    'Form' => array(
                        'fields' => array('username' => 'email')
                    )
                ),
                'loginAction' => array(
                    'controller' => 'Users',
                    'action' => 'login',
                    'plugin' => 'trois'
                ),
            ),
            'RequestHandler',
        );
        public $helpers = array('Trois.Media', 'Trois.Storage');

        public function beforeFilter() {
                parent::beforeFilter();
                $this->Auth->allow(array('login'));
//                if (array_key_exists('language', $this->request->params))
//                        Configure::write('Config.language', $this->request->params['language']);
        }

//        public function redirect($url, $status = null, $exit = true) {
//                parent::redirect(router_url_language($url), $status, $exit);
//        }

}
