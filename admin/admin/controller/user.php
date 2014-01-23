<?php
class user extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("admin")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("admin")->select()->findAll(null,null,null,$page->getLimitStart().",".$page->getLimitNum());
		$this->role = M("role")->findAll("role_power>'".$_SESSION['role_id']."'");
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
		
	public function addAction()
	{
		if(!empty($_POST))
		{
			if(M("admin")->findCount(array("name"=>$_POST['admin_name'])))
			{
				C("application")->message(2,"{$_POST['admin_name']}账户已存在");
			}
			else
			{
				unset($_POST['pwd2']);
				$_POST['pwd'] = md5($_POST['pwd']);
				$rs = M("role")->findByPk($_POST['role']);
				if($_SESSION['role_id'] >= $rs['role_power'])
				{
					C("application")->message(3,"你没有权限添加该账户");
				}
				else
				{
					if(M("admin")->createAuto())
					{
						C("application")->message(1,"添加用户成功");
					}
					else
					{
						C("application")->message(0,"添加用户失败");
					}
				}
			}
		}
		$this->jump(Url("index"));
	}
	
	public function editAction()
	{
		if(!empty($_POST))
		{
			$id = isset($_POST['id']) && is_numeric($_POST['id']) ? $_POST['id'] : 0;
			$rs = M("admin")->select()->findByPk($id);
			if($_SESSION['role_id'] >= $rs['role_power'])
			{
				C("application")->message(3,"你没有权限修改该账户");
			}
			else
			{
				if(M("admin")->updateAuto())
				{
					C("application")->message(1,"修改账户信息成功");
				}
				else
				{
					C("application")->message(0,"修改账户信息失败");
				}
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("admin")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
	
	public function deleteAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$rs = M("admin")->select()->findByPk($_GET['id']);
			if($_SESSION['role_id'] >= $rs['role_power'])
			{
				C("application")->message(3,"你没有权限删除该账户");
			}
			else
			{
				if(M("admin")->deleteByPk($_GET['id']))
				{
					C("application")->message(1,"删除账户成功");
				}
				else
				{
					C("application")->message(0,"删除账户失败");
				}
			}
		}
		$this->jump(Url("index"));
	}
	
	public function lockAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$result = M("admin")->select()->findByPk($_GET['id']);
			if(empty($result))
			{
				C("application")->message(3,"操作不存在的账户");
			}
			else
			{
				if($_SESSION['role_id'] >= $result['role_power'])
				{
					C("application")->message(3,"你没有权限操作该账户");
				}
				else
				{
					$result['admin_lock'] = $result['admin_lock'] ? "0" : "1";
					if(M("admin")->updateByPk($result['admin_id'],array("lock"=>$result['admin_lock'])))
					{
						C("application")->message(1,"账户锁操作成功");
					}
					else
					{
						C("application")->message(0,"账户锁操作失败");
					}
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>