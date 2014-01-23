<?php
class office extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("office")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("office")->findAll(null,null,null,$page->getLimitStart().",".$page->getLimitNum());
	}
	
	public function indexAction()
	{
		if(isset($_SESSION['message']))
		{
			$this->message = $_SESSION['message'];
			unset($_SESSION['message']);
		}
		$this->display("index");
	}
	
	public function deleteAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			if(M("office")->deleteByPk($_GET['id']))
			{
				C("application")->message(1,"删除科室成功");
			}
			else
			{
				C("application")->message(0,"删除科室失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function addAction()
	{
		if(!empty($_POST))
		{
			if(M("office")->createAuto())
			{
				C("application")->message(1,"添加科室成功");
			}
			else
			{
				C("application")->message(0,"添加科室失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function editAction()
	{
		if(!empty($_POST))
		{
			if(M("office")->updateAuto())
			{
				C("application")->message(1,"修改科室成功");
			}
			else
			{
				C("application")->message(0,"修改科室失败");
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("office")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
}
?>