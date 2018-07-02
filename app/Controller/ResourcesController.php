<?php
App::uses('AppController', 'Controller');
/**
 * ActionLists Controller
 *
 * @property ActionList $ActionList
 * @property PaginatorComponent $Paginator
 */
class ResourcesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
$this->loadmodel('Resource');
		$resourceList = $this->Resource->find('all');
		//echo '<pre>';print_r($resourceList);exit;
		$this->set('resourceLists', $resourceList);

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActionList->exists($id)) {
			throw new NotFoundException(__('Invalid action list'));
		}
		$options = array('conditions' => array('ActionList.' . $this->ActionList->primaryKey => $id));
		$this->set('actionList', $this->ActionList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Resource->create();
			//echo '<pre>';print_r($this->request->data);exit;
			if ($this->Resource->save($this->request->data)) {
				$this->Session->setFlash(Configure::read('MSG.CLOSE').__('The Resource has been saved.'),'default',array('class' => 'alert alert-block alert-success fade in text-center')); 
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(Configure::read('MSG.CLOSE').__('The Resource could not be saved. Please, try again.'),'default',array('class' => 'alert alert-block alert-danger fade in text-center'));
			}
		}
		$this->loadmodel('State');
		$states = $this->State->find('list');
		$actions = $this->Resource->find('list');
		$this->set(compact('actions','states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Resource->exists($id)) {
			throw new NotFoundException(__('Invalid action list'));
		}
		if ($this->request->is(array('post', 'put'))) {
		//echo '<pre>';print_r($this->request->data);exit;
			if ($this->Resource->save($this->request->data)) {
				$this->Session->setFlash(Configure::read('MSG.CLOSE').__('The resource has been saved.'),'default',array('class' => 'alert alert-block alert-success fade in text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(Configure::read('MSG.CLOSE').__('The resource could not be saved. Please, try again.'),'default',array('class' => 'alert alert-block alert-danger fade in text-center'));
			}
		} else {
		
			$options = array('conditions' => array('Resource.' . $this->Resource->primaryKey => $id));
			$this->request->data = $this->Resource->find('first', $options);
		}
		$this->loadmodel('State');
		$states = $this->State->find('list');
		$this->set(compact('states'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Resource->id = $id;
		if (!$this->Resource->exists()) {
			throw new NotFoundException(__('Invalid Resource'));
		}
                
                
               
		$this->request->allowMethod('post', 'delete','get');
		if ($this->Resource->delete()) {
			$this->Session->setFlash(Configure::read('MSG.CLOSE').__('The Resource has been deleted.'),'default',array('class' => 'alert alert-block alert-danger fade in text-center'));
		} else {
			$this->Session->setFlash(Configure::read('MSG.CLOSE').__('The Resource could not be deleted. Please, try again.'),'default',array('class' => 'alert alert-block alert-danger fade in text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}
       
}
