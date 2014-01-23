<?php
class administrator extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("acl")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("acl")->select()->findAll(null,"`acl_role_id`",null,$page->getLimitStart().",".$page->getLimitNum());
		$this->role = M("role")->findAll("role_power>='".$_SESSION['role_id']."'");
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
	
	public function editAction()
	{
		if(!empty($_POST))
		{
			$id = isset($_POST['id']) && is_numeric($_POST['id']) ? $_POST['id'] : 0;
			$rs = M("acl")->select()->findByPk($id);
			if($_SESSION['role_id'] > $rs['role_power'])
			{
				C("application")->message(3,"你没有权限修改该信息");
			}
			else
			{
				if(M("acl")->updateAuto())
				{
					C("application")->message(1,"修改访问权限信息成功");
				}
				else
				{
					C("application")->message(0,"修改访问权限信息失败");
				}
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("acl")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
	
	public function deleteAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$rs = M("acl")->select()->findByPk($_GET['id']);
			if($_SESSION['role_id'] > $rs['role_power'])
			{
				C("application")->message(3,"你没有权限删除该信息");
			}
			else
			{
				if(M("acl")->deleteByPk($_GET['id']))
				{
					C("application")->message(1,"删除访问权限成功");
				}
				else
				{
					C("application")->message(0,"删除访问权限失败");
				}
			}
		}
		$this->jump(Url("index"));
	}
	
	public function addAction()
	{
		if(!empty($_POST))
		{
			if(M("acl")->findCount(array('controller'=>$_POST['controller'],'action'=>$_POST['action'])))
			{
				C("application")->message(2,"{$_POST['name']}访问权限已存在");
			}
			else
			{
				$rs = M("role")->findByPk($_POST['role_id']);
				if($_SESSION['role_id'] > $rs['role_power'])
				{
					C("application")->message(3,"你没有权限添加该信息");
				}
				else
				{
					if(M("acl")->createAuto())
					{
						C("application")->message(1,"添加访问权限成功");
					}
					else
					{
						C("application")->message(0,"添加访问权限失败");
					}
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>