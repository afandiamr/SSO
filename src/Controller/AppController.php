<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public static $userId = 0;
    public static $polresID = 0;
    
    public function beforeFilter(Event $event) {
        $this->Auth->allow(['login', 'logout', 'reset','tes', 'forget']);
        //MENGATUR AGAR TETAP LOGIN SEKALI
        if (in_array($this->request->getParam('action'), ['forget', 'login']) && !empty($this->Auth->user('id'))) {
            $this->Flash->error(__('You have already logged in'));
            return $this->redirect($this->referer());
        }


        
        $current_user = null;
        if (!empty($this->Auth->User('id'))) {
            $current_user = TableRegistry::get('Users')->get($this->Auth->User('id'), [
                'fields' => ['id', 'photo', 'photo_dir', 'role_id', 'username', 'last_login', 'Profiles.full_name', 'Profiles.nick_name', 'Profiles.polres', 'Profiles.jabatan', 'Roles.role_name'],
                'contain' => ['Profiles', 'Roles']
            ]);
        }
        self::$polresID = $current_user[0]['Profile']['polres'];
        $this->set(compact(['location', 'current_user']));

    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Security');
    //    $this->loadComponent('Csrf');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'], //MEMBATASI PERGERAKAN CONTROLLER 
            'authError' => 'You are not authorized',
            'loginRedirect' => [//SETELAH LOGIN DIARHKAN
                'controller' => 'Users', //KONTROLER ARAHAN LOGIN
                'action' => 'landing', //AKSI DENGAN PEMANGGILAN CONTROLLER METHOD
            ],
            'autoRedirect' => false,
            'logoutRedirect' => [//SETELAH LOGOUT  DIARAHKAN
                'controller' => 'Users', //KONTROLER ARAHAN SETELAH LOGOUT 
                'action' => 'login', //AKSI DENGAN PEMANGGILAN CONTROLLER METHOD
            ]
        ]);

//        $userId = $this->Auth->User('id');
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function isAuthorized($user) {
        return true;
    }
}
