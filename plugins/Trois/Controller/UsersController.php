<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

        public function admin_login() {
                if ($this->request->is('post')) {
                        if ($this->Auth->login()) {
                                $this->redirect($this->Auth->redirect());
                        } else {
                                $this->Session->setFlash(__('Invalid username or password, try again'));
                        }
                }
        }

        public function admin_logout() {
                $this->redirect($this->Auth->logout());
        }

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->User->recursive = 0;
                $this->set('users', $this->paginate());
        }

        /**
         * admin_view method
         *
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                $this->User->id = $id;
                if (!$this->User->exists()) {
                        throw new NotFoundException(__('Invalid user'));
                }
                $this->set('user', $this->User->read(null, $id));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->User->create();
                        if ($this->User->save($this->request->data)) {
                                $this->Session->setFlash(__('The user has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                        }
                }
                $groups = $this->User->Group->find('list');
                $this->set(compact('groups'));
        }

        /**
         * admin_edit method
         *
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                $this->User->id = $id;
                if (!$this->User->exists()) {
                        throw new NotFoundException(__('Invalid user'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->User->save($this->request->data)) {
                                $this->Session->setFlash(__('The user has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                        }
                } else {
                        $this->request->data = $this->User->read(null, $id);
                }
                $groups = $this->User->Group->find('list');
                $this->set(compact('groups'));
        }

        /**
         * admin_delete method
         *
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                if (!$this->request->is('post')) {
                        throw new MethodNotAllowedException();
                }
                $this->User->id = $id;
                if (!$this->User->exists()) {
                        throw new NotFoundException(__('Invalid user'));
                }
                if ($this->User->delete()) {
                        $this->Session->setFlash(__('User deleted'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('User was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

}
