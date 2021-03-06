<?php

App::uses('AppController', 'Controller');

/**
 * Locations Controller
 *
 * @property Location $Location
 */
class LocationsController extends AppController {

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Location->recursive = 0;
                $this->set('locations', $this->paginate());
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->Location->exists($id)) {
                        throw new NotFoundException(__('Invalid location'));
                }
                $options = array('conditions' => array('Location.' . $this->Location->primaryKey => $id));
                $this->set('location', $this->Location->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Location->create();
                        if ($this->Location->save($this->request->data)) {
                                $this->Session->setFlash(__('The location has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The location could not be saved. Please, try again.'));
                        }
                }
                $locationTypes = $this->Location->LocationType->find('list');
                $this->set(compact('locationTypes'));
        }

        /**
         * admin_edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                if (!$this->Location->exists($id)) {
                        throw new NotFoundException(__('Invalid location'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Location->save($this->request->data)) {
                                $this->Session->setFlash(__('The location has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The location could not be saved. Please, try again.'));
                        }
                } else {
                        $options = array('conditions' => array('Location.' . $this->Location->primaryKey => $id));
                        $this->request->data = $this->Location->find('first', $options);
                        debug($this->request->data);
                }
                $locationTypes = $this->Location->LocationType->find('list');
                $this->set(compact('locationTypes'));
                
        }

        /**
         * admin_delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                $this->Location->id = $id;
                if (!$this->Location->exists()) {
                        throw new NotFoundException(__('Invalid location'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Location->delete()) {
                        $this->Session->setFlash(__('Location deleted'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Location was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

        public function map() {
                $this->Location->recursive = -1;
                $locations = $this->Location->find('all');
                $this->set('locations', $locations);
        }

}
