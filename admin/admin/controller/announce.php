<?php
class announce extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$page = new Page(20,M("notice")->findCount(),'pg');
		$page->setClass("number","number current");
		$this->page = $page->getPageStr(4);
		$this->list = M("notice")->findAll(null,"`time` DESC",null,$page->getLimitStart().",".$page->getLimitNum());
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
			if(M("notice")->updateAuto())
			{
				C("application")->message(1,"修改公告信息成功");
			}
			else
			{
				C("application")->message(0,"修改公告信息失败");
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("notice")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
	
	public function addAction()
	{
		if(!empty($_POST))
		{
			if(M("notice")->createAuto())
			{
				C("application")->message(1,"添加公告成功");
			}
			else
			{
				C("application")->message(0,"添加公告失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function deleteAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			if(M("notice")->deleteByPk($_GET['id']))
			{
				C("application")->message(1,"删除公告成功");
			}
			else
			{
				C("application")->message(0,"删除公告失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function lockAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$result = M("notice")->findByPk($_GET['id']);
			if(empty($result))
			{
				C("application")->message(4,"操作不存在的公告");
			}
			else
			{
				$result['lock'] = $result['lock'] ? "0" : "1";
				if(M("notice")->updateBy("id",$result['id'],array("lock"=>$result['lock'])))
				{
					C("application")->message(1,"公告显示/隐藏操作成功");
				}
				else
				{
					C("application")->message(0,"公告显示/隐藏操作失败");
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>