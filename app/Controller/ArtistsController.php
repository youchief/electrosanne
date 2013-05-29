<?php

App::uses('AppController', 'Controller');

/**
 * Artists Controller
 *
 * @property Artist $Artist
 */
class ArtistsController extends AppController {

        public $helpers = array('Time');

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Artist->recursive = 0;
                if (empty($this->request->data)) {
                        $this->set('artists', $this->paginate());
                } else {
                        $artists = $this->paginate(array('Artist.name like ' => '%' . $this->request->data['Artist']['name'] . "%"));
                        $this->set('artists', $artists);
                        if (empty($artists)) {
                                $this->Session->setFlash(__('No result, please try again!'));
                        }
                }
        }

        public function index() {
                $this->Artist->recursive = 2;
                $artists = $this->Artist->find('all');
                $this->set('artists', $artists);
        }

        public function view($id = null) {
                if (!$this->Artist->exists($id)) {
                        throw new NotFoundException(__('Invalid artist'));
                }
                $this->Artist->recursive = 2;
                $options = array('conditions' => array('Artist.' . $this->Artist->primaryKey => $id));
                $artist = $this->Artist->find('first', $options);
                $this->set('artist', $artist);
                $this->set('mediafiles', $artist['Artist']['media']);
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->Artist->exists($id)) {
                        throw new NotFoundException(__('Invalid artist'));
                }
                $options = array('conditions' => array('Artist.' . $this->Artist->primaryKey => $id));
                $artist = $this->Artist->find('first', $options);
                $this->set('artist', $artist);
                $this->set('mediafiles', $artist['Artist']['media']);
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Artist->create();
                        if ($this->Artist->save($this->request->data)) {
                                $this->Session->setFlash(__('The artist has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The artist could not be saved. Please, try again.'));
                        }
                }
                $events = $this->Artist->Event->find('list');
                $this->set(compact('events'));
        }

        /**
         * admin_edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                if (!$this->Artist->exists($id)) {
                        throw new NotFoundException(__('Invalid artist'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Artist->saveAssociated($this->request->data)) {
                                $this->Session->setFlash(__('The artist has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The artist could not be saved. Please, try again.'));
                        }
                } else {
                        $options = array('conditions' => array('Artist.' . $this->Artist->primaryKey => $id));
                        //$this->Artist->unbindModel($options)
                        $this->request->data = $this->Artist->read(null, $id);
                }
                $this->Artist->Event->recursive = -1;
                $events = $this->Artist->Event->find('list');
                $this->set(compact('events'));
        }

        /**
         * admin_delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                $this->Artist->id = $id;
                if (!$this->Artist->exists()) {
                        throw new NotFoundException(__('Invalid artist'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Artist->delete()) {
                        $this->Session->setFlash(__('Artist deleted'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Artist was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

}
