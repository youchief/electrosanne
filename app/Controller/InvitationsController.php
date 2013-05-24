<?php
App::uses('AppController', 'Controller');
/**
 * Invitations Controller
 *
 * @property Invitation $Invitation
 */
class InvitationsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Invitation->recursive = 0;
		$this->set('invitations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Invitation->exists($id)) {
			throw new NotFoundException(__('Invalid invitation'));
		}
		$options = array('conditions' => array('Invitation.' . $this->Invitation->primaryKey => $id));
		$this->set('invitation', $this->Invitation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Invitation->create();
			if ($this->Invitation->save($this->request->data)) {
				$this->Session->setFlash(__('The invitation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invitation could not be saved. Please, try again.'));
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
		if (!$this->Invitation->exists($id)) {
			throw new NotFoundException(__('Invalid invitation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Invitation->save($this->request->data)) {
				$this->Session->setFlash(__('The invitation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invitation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Invitation.' . $this->Invitation->primaryKey => $id));
			$this->request->data = $this->Invitation->find('first', $options);
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
		$this->Invitation->id = $id;
		if (!$this->Invitation->exists()) {
			throw new NotFoundException(__('Invalid invitation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Invitation->delete()) {
			$this->Session->setFlash(__('Invitation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Invitation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
