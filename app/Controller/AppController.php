<?php

App::uses('Controller', 'Controller');

class AppController extends Controller
{
	public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );
	
    public $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() 
	{
		$this->Auth->allow('display');
		
        //Configure AuthComponent
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
    }
	
	
}
