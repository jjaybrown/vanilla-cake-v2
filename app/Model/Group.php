<?

class Group extends AppModel
{
	public $actsAs = array('Acl' => array('type' => 'requester'));

    function parentNode()
    {
        return null;
    }
}
?>