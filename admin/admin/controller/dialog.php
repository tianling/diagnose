<?php
class dialog extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(100,M("dialog")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->dialog = M("dialog")->findAll(null,"`time` DESC",null,$page->getLimitStart().",".$page->getLimitNum());
	}
	
	public function indexAction()
	{
		$this->display("index");
	}
}
?>