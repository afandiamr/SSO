<?php
namespace App\Controller;

use App\Controller\AppController;
use DataTables\Controller\DataTablesAjaxRequestTrait;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    use DataTablesAjaxRequestTrait;
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('DataTables.DataTables');
        $this->DataTables->createConfig('Users')
                ->table('Users')
                ->databaseColumn('username')
                ->column('No', ['label'=>'No.','database' => false,'searchable'=>false])
                ->column('username', ['label' => 'Username'])
                ->column('last_login', ['label' => 'Riwayat Login','searchable'=>false])
                ->column('Aksi', ['label' => 'Aksi','database'=> false,'searchable'=>false]);
    }


    /**
     * Method untuk login
     */
    public function login()
    {
        $this->viewBuilder()->setLayout('empty');
//        $this->autoRender = false;
        if ($this->request->is('post')) {

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success(__('You have login now', ['key' => 'element']));
                return $this->redirect(['action' => 'landing']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    /**
     * Method untuk logout
     */
    public function logout()
    {
        $this->Flash->default(__('You have logout now'));
        return $this->redirect($this->Auth->logout());
    }

    /**
     *  method untuk landing page
     *
     * @return \Cake\Http\Response|void
     */
    public function landing()
    {
        $this->viewBuilder()->setLayout('empty');
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /**
     *  method untuk landing page
     *
     * @return \Cake\Http\Response|void
     */
    public function dashboard()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     *
     *
     */

    //--------------------------------DEFAULT-----------------------------------------//
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->DataTables->setViewVars(['Users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
