<?php

class AdminsController extends AppController {

    
    var $name = 'Admins';
    var $helpers = array('Html', 'Form', 'Javascript');
    var $uses = array('Admin');
    var $components = array('Session', 'Auth');
    var $layout = 'admin';

    function beforeFilter() {
        
        $this->Auth->userModel = 'Admin';
        $this->Auth->loginRedirect = array('controller' => 'admin_products', 'action' => 'index');
        $this->Auth->loginError = "Wrong Username or Password";

        $this->Auth->fields = array(
            'username' => 'name',
            'password' => 'password',
            'loginAction' => array('controller' => 'admins',
                'action' => 'login',
                'plugin' => false,
                'admin' => false,
            )
        );
    }

    function login() {
        if ($this->Session->read('Auth.Admin.name')) {
            $this->redirect(array('controller' => 'admin_products', 'action' => 'index'));
        }
    }

    function index() {
        $this->redirect(array('controller' => 'admin_products', 'action' => 'index'));
    }

    function logout() {

        $this->Session->destroy();
        $this->Session->setFlash('You have been logged out successfully');
        $this->redirect($this->Auth->logout());
    }

    function resetpassword(){
        
        if (isset($_POST['data'])) {
            $name = $this->Session->read('Auth.Admin.name');
            $user = $this->Admin->find('first', array('conditions' => array('name' => $name)));
       
            if (strcmp($this->data['Admin']['new'], $this->data['Admin']['confirm']) == 0) {
                if ($this->Auth->password($this->data['Admin']['current']) == $user['Admin']['password']) {
                    $this->Admin->id=$user['Admin']['id'];
                    $this->Admin->saveField('password', $this->Auth->password($this->data['Admin']['new']));
                    $this->Session->setFlash('Password has been successfully changed');
                    $this->redirect('index');
                } else {
                    $this->Session->setFlash('You have not entered correct password');
                }
            } else {
                $this->Session->setFlash('New password and Confirm password do not match');
            }
        }
    }

    function addadmin() {
        if (isset($_POST['data'])) {
            $count = $this->Admin->find('count', array('conditions' => array('name' => $this->data['Admin']['name'], 'status' => 'active')));
            if ($count > 0) {
                $this->Session->setFlash('Username already exists.');
                $this->redirect('addadmin');
            } else {
                if ($this->data['Admin']['password'] == $this->Auth->password($this->data['Admin']['repassword'])) {
                    //if (strlen($this->data['Admin']['repassword']) >= 8) {
                    $newadmin = array('name' => $this->data['Admin']['name'],
                        'password' => $this->data['Admin']['password']);

                    $this->Admin->save($newadmin);
                    $this->Session->setFlash('New Administrator haas been created');
                    $this->redirect(array('controller' => 'admin_products', 'action' => 'index'));
                    //} else {$this->Session->setFlash('Password length must be more than 8 characters'); }
                } else {
                    $this->Session->setFlash('Password and Confirm password do not match');
                }
            }
        }
    }
}

?>
