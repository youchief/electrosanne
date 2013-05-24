<?php
App::uses('AppController', 'Controller');
/**
 * Mediafiles Controller
 *
 * @property Mediafile $Mediafile
 */
class MediafilesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mediafile->recursive = 0;
		$this->set('mediafiles', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Mediafile->exists($id)) {
			throw new NotFoundException(__('Invalid mediafile'));
		}
		$options = array('conditions' => array('Mediafile.' . $this->Mediafile->primaryKey => $id));
		$this->set('mediafile', $this->Mediafile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mediafile->create();
			if ($this->Mediafile->save($this->request->data)) {
				$this->Session->setFlash(__('The mediafile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediafile could not be saved. Please, try again.'));
			}
		}
		$mediaTags = $this->Mediafile->MediaTag->find('list');
		$this->set(compact('mediaTags'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Mediafile->exists($id)) {
			throw new NotFoundException(__('Invalid mediafile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mediafile->save($this->request->data)) {
				$this->Session->setFlash(__('The mediafile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediafile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mediafile.' . $this->Mediafile->primaryKey => $id));
			$this->request->data = $this->Mediafile->find('first', $options);
		}
		$mediaTags = $this->Mediafile->MediaTag->find('list');
		$this->set(compact('mediaTags'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Mediafile->id = $id;
		if (!$this->Mediafile->exists()) {
			throw new NotFoundException(__('Invalid mediafile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mediafile->delete()) {
			$this->Session->setFlash(__('Mediafile deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mediafile was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
