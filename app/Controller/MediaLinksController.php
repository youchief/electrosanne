<?php
App::uses('AppController', 'Controller');
/**
 * MediaLinks Controller
 *
 * @property MediaLink $MediaLink
 */
class MediaLinksController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->MediaLink->recursive = 0;
		$this->set('mediaLinks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->MediaLink->exists($id)) {
			throw new NotFoundException(__('Invalid media link'));
		}
		$options = array('conditions' => array('MediaLink.' . $this->MediaLink->primaryKey => $id));
		$this->set('mediaLink', $this->MediaLink->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MediaLink->create();
			if ($this->MediaLink->save($this->request->data)) {
				$this->Session->setFlash(__('The media link has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media link could not be saved. Please, try again.'));
			}
		}
		$mediafiles = $this->MediaLink->Mediafile->find('list');
		$this->set(compact('mediafiles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->MediaLink->exists($id)) {
			throw new NotFoundException(__('Invalid media link'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MediaLink->save($this->request->data)) {
				$this->Session->setFlash(__('The media link has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MediaLink.' . $this->MediaLink->primaryKey => $id));
			$this->request->data = $this->MediaLink->find('first', $options);
		}
		$mediafiles = $this->MediaLink->Mediafile->find('list');
		$this->set(compact('mediafiles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->MediaLink->id = $id;
		if (!$this->MediaLink->exists()) {
			throw new NotFoundException(__('Invalid media link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MediaLink->delete()) {
			$this->Session->setFlash(__('Media link deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Media link was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
