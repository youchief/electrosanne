<?php
App::uses('AppController', 'Controller');
/**
 * EventTypes Controller
 *
 * @property EventType $EventType
 */
class EventTypesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EventType->recursive = 0;
		$this->set('eventTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalid event type'));
		}
		$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
		$this->set('eventType', $this->EventType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EventType->create();
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalid event type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
			$this->request->data = $this->EventType->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EventType->id = $id;
		if (!$this->EventType->exists()) {
			throw new NotFoundException(__('Invalid event type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventType->delete()) {
			$this->Session->setFlash(__('Event type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Event type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
