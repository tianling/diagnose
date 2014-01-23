<?php
class register extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("register")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("register")->select()->findAll(null,"user_lock,user_addtime desc",null,$page->getLimitStart().",".$page->getLimitNum());
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
			if(M("register")->deleteByPk($_GET['id']))
			{
				C("application")->message(1,"删除挂号信息成功");
			}
			else
			{
				C("application")->message(0,"删除挂号信息失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function lockAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$result = M("register")->findByPk($_GET['id']);
			if(empty($result))
			{
				C("application")->message(4,"该挂号单不存在");
			}
			else
			{
				$result['user_lock'] = $result['user_lock'] ? "0" : "1";
				if(M("register")->updateByPk($result['user_id'],array("lock"=>$result['user_lock'])))
				{
					C("application")->message(1,"审核操作完成");
				}
				else
				{
					C("application")->message(0,"审核出现错误");
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>