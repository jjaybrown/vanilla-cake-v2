<?
App::uses('AppController', 'Controller');

class UsersController extends AppController 
{
	public $scaffold;
	
	function beforeFilter()
	{
    	parent::beforeFilter();
    	$this->Auth->allow('login','logout');
	}
	
	function login()
	{
	    if ($this->request->is('post'))
	    {
	        if ($this->Auth->login()) 
	        {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash('Your username or password was incorrect.');
	        }
	    }
	}

	function logout()
	{
		$this->autoRender = false;
	    $this->Auth->logout();
	}
}
?>
