<?php

App::uses('AppController', 'Controller');
App::uses('CakeTime', 'Utility');

/**
 * Events Controller
 *
 * @property Event $Event
 */
class EventsController extends AppController {

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Event->recursive = 0;
                if (empty($this->request->data)) {
                        $this->set('events', $this->paginate());
                } else {
                        $events = $this->paginate(array('Event.name like ' => '%' . $this->request->data['Event']['name']));
                        $this->set('events', $events);
                        if (empty($events)) {
                                $this->Session->setFlash(__('No result, please try again!'));
                        }
                }
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->Event->exists($id)) {
                        throw new NotFoundException(__('Invalid event'));
                }
                $options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
                $this->set('event', $this->Event->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Event->create();
                        if ($this->Event->save($this->request->data)) {
                                $this->Session->setFlash(__('The event has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The event could not be saved. Please, try again.'));
                        }
                }
                $editions = $this->Event->Edition->find('list');
                $locations = $this->Event->Location->find('list');
                $artists = $this->Event->Artist->find('list');
                $eventTypes = $this->Event->EventType->find('list');
                $this->set(compact('editions', 'locations', 'artists', 'eventTypes'));
        }

        /**
         * admin_edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                if (!$this->Event->exists($id)) {
                        throw new NotFoundException(__('Invalid event'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Event->save($this->request->data)) {
                                $this->Session->setFlash(__('The event has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The event could not be saved. Please, try again.'));
                        }
                } else {
                        $options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
                        $this->request->data = $this->Event->find('first', $options);
                }
                $editions = $this->Event->Edition->find('list');
                $locations = $this->Event->Location->find('list');
                $artists = $this->Event->Artist->find('list');
                $eventTypes = $this->Event->EventType->find('list');
                $this->set(compact('editions', 'locations', 'artists', 'eventTypes'));
        }

        /**
         * admin_delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                $this->Event->id = $id;
                if (!$this->Event->exists()) {
                        throw new NotFoundException(__('Invalid event'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Event->delete()) {
                        $this->Session->setFlash(__('Event deleted'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Event was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

        public function day($day) {
                $this->Event->recursive = 0;
                $from =  date("Y-m-d H:i", (strtotime($day) + (10 * 60 * 60)));
                $to  = date("Y-m-d H:i", (strtotime($day) + (29 * 60 * 60)));
                
                $conditions  = array('Event.date  BETWEEN ? AND ?' => array($from,$to));

                $events = $this->Event->find('all', array('conditions' =>$conditions));
                $this->set('events', $events);
                $this->set('day', $day);
        }

}
