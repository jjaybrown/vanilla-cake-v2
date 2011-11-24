<?
App::uses('AppController', 'Controller');

class GroupsController extends AppController 
{
	public $scaffold;
	
	function beforeFilter()
	{
    	parent::beforeFilter();
		//$this->Auth->allow('');
	}
}
?>
