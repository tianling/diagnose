<?php
class doctor extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("doctor")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("doctor")->select()->findAll(null,null,null,$page->getLimitStart().",".$page->getLimitNum());
		$this->office = M("office")->findAll();
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
			if(M("doctor")->deleteByPk($_GET['id']))
			{
				C("application")->message(1,"删除医生成功");
			}
			else
			{
				C("application")->message(0,"删除医生失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function addAction()
	{
		if(!empty($_POST))
		{
			if(M("doctor")->createAuto())
			{
				C("application")->message(1,"添加医生成功");
			}
			else
			{
				C("application")->message(0,"添加医生失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function editAction()
	{
		if(!empty($_POST))
		{
			if(M("doctor")->updateAuto())
			{
				C("application")->message(1,"修改医生成功");
			}
			else
			{
				C("application")->message(0,"修改医生失败");
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("doctor")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
}
?>