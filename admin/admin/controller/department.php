<?php
class department extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("role")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("role")->findAll(null,null,null,$page->getLimitStart().",".$page->getLimitNum());
	}
	
	public function indexAction()
	{
		if(isset($_SESSION['message']))
		{
			$this->message = $_SESSION['message'];
			unset($_SESSION['message']);
		}
		$this->display();
	}
	
	public function editAction()
	{
		if(!empty($_POST))
		{
			$id = isset($_POST['id']) && is_numeric($_POST['id']) ? $_POST['id'] : 0;
			$rs = M("role")->findByPk($id);
			if($_SESSION['role_id'] >= $rs['role_power'] || $_SESSION['role_id'] >= $_POST['power'])
			{
				C("application")->message(3,"你没有权限修改该角色");
			}
			else
			{
				if(M("role")->updateAuto())
				{
					C("application")->message(1,"修改角色权限成功");
				}
				else
				{
					C("application")->message(0,"修改角色权限失败");
				}
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("role")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
	
	public function deleteAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$rs = M("role")->findByPk($_GET['id']);
			if($_SESSION['role_id'] >= $rs['role_power'])
			{
				C("application")->message(3,"你没有权限删除该角色");
			}
			else
			{
				if(M("role")->deleteByPk($_GET['id']))
				{
					C("application")->message(1,"删除角色成功");
				}
				else
				{
					C("application")->message(0,"删除角色失败");
				}
			}
		}
		$this->jump(Url("index"));
	}
	
	public function addAction()
	{
		if(!empty($_POST))
		{
			if(M("role")->findCount(array("name"=>$_POST['name'])))
			{
				C("application")->message(2,"{$_POST['name']}角色已存在");
			}
			else
			{
				if($_SESSION['role_id'] >= $_POST['power'])
				{
					C("application")->message(3,"你没有权限添加该角色");
				}
				else
				{
					if(M("role")->createAuto())
					{
						C("application")->message(1,"添加角色成功");
					}
					else
					{
						C("application")->message(0,"添加角色失败");
					}
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>