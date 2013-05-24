<?php
App::uses('AppController', 'Controller');
/**
 * Subscriptions Controller
 *
 * @property Subscription $Subscription
 */
class SubscriptionsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Subscription->recursive = 0;
		$this->set('subscriptions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Subscription->exists($id)) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		$options = array('conditions' => array('Subscription.' . $this->Subscription->primaryKey => $id));
		$this->set('subscription', $this->Subscription->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Subscription->create();
			if ($this->Subscription->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.'));
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
		if (!$this->Subscription->exists($id)) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subscription->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subscription.' . $this->Subscription->primaryKey => $id));
			$this->request->data = $this->Subscription->find('first', $options);
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
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Subscription->delete()) {
			$this->Session->setFlash(__('Subscription deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subscription was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
