<?php
App::uses('AppController', 'Controller');
/**
 * LocationTypes Controller
 *
 * @property LocationType $LocationType
 */
class LocationTypesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LocationType->recursive = 0;
		$this->set('locationTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LocationType->exists($id)) {
			throw new NotFoundException(__('Invalid location type'));
		}
		$options = array('conditions' => array('LocationType.' . $this->LocationType->primaryKey => $id));
		$this->set('locationType', $this->LocationType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LocationType->create();
			if ($this->LocationType->save($this->request->data)) {
				$this->Session->setFlash(__('The location type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The location type could not be saved. Please, try again.'));
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
		if (!$this->LocationType->exists($id)) {
			throw new NotFoundException(__('Invalid location type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LocationType->save($this->request->data)) {
				$this->Session->setFlash(__('The location type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The location type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocationType.' . $this->LocationType->primaryKey => $id));
			$this->request->data = $this->LocationType->find('first', $options);
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
		$this->LocationType->id = $id;
		if (!$this->LocationType->exists()) {
			throw new NotFoundException(__('Invalid location type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocationType->delete()) {
			$this->Session->setFlash(__('Location type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Location type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
