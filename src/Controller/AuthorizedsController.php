<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Authorizeds Controller
 *
 * @property \App\Model\Table\AuthorizedsTable $Authorizeds
 *
 * @method \App\Model\Entity\Authorized[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthorizedsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentAuthorizeds', 'Roles']
        ];
        $authorizeds = $this->paginate($this->Authorizeds);

        $this->set(compact('authorizeds'));
    }

    /**
     * View method
     *
     * @param string|null $id Authorized id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorized = $this->Authorizeds->get($id, [
            'contain' => ['ParentAuthorizeds', 'Roles', 'ChildAuthorizeds']
        ]);

        $this->set('authorized', $authorized);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorized = $this->Authorizeds->newEntity();
        if ($this->request->is('post')) {
            $authorized = $this->Authorizeds->patchEntity($authorized, $this->request->getData());
            if ($this->Authorizeds->save($authorized)) {
                $this->Flash->success(__('The authorized has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorized could not be saved. Please, try again.'));
        }
        $parentAuthorizeds = $this->Authorizeds->ParentAuthorizeds->find('list', ['limit' => 200]);
        $roles = $this->Authorizeds->Roles->find('list', ['limit' => 200]);
        $this->set(compact('authorized', 'parentAuthorizeds', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authorized id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorized = $this->Authorizeds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorized = $this->Authorizeds->patchEntity($authorized, $this->request->getData());
            if ($this->Authorizeds->save($authorized)) {
                $this->Flash->success(__('The authorized has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorized could not be saved. Please, try again.'));
        }
        $parentAuthorizeds = $this->Authorizeds->ParentAuthorizeds->find('list', ['limit' => 200]);
        $roles = $this->Authorizeds->Roles->find('list', ['limit' => 200]);
        $this->set(compact('authorized', 'parentAuthorizeds', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authorized id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorized = $this->Authorizeds->get($id);
        if ($this->Authorizeds->delete($authorized)) {
            $this->Flash->success(__('The authorized has been deleted.'));
        } else {
            $this->Flash->error(__('The authorized could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
