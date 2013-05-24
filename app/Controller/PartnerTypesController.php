<?php
App::uses('AppController', 'Controller');
/**
 * PartnerTypes Controller
 *
 * @property PartnerType $PartnerType
 */
class PartnerTypesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PartnerType->recursive = 0;
		$this->set('partnerTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PartnerType->exists($id)) {
			throw new NotFoundException(__('Invalid partner type'));
		}
		$options = array('conditions' => array('PartnerType.' . $this->PartnerType->primaryKey => $id));
		$this->set('partnerType', $this->PartnerType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PartnerType->create();
			if ($this->PartnerType->save($this->request->data)) {
				$this->Session->setFlash(__('The partner type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner type could not be saved. Please, try again.'));
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
		if (!$this->PartnerType->exists($id)) {
			throw new NotFoundException(__('Invalid partner type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PartnerType->save($this->request->data)) {
				$this->Session->setFlash(__('The partner type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PartnerType.' . $this->PartnerType->primaryKey => $id));
			$this->request->data = $this->PartnerType->find('first', $options);
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
		$this->PartnerType->id = $id;
		if (!$this->PartnerType->exists()) {
			throw new NotFoundException(__('Invalid partner type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PartnerType->delete()) {
			$this->Session->setFlash(__('Partner type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Partner type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
