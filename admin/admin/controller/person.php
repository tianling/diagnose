<?php
class person extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$this->list = M("admin")->select()->findByPk($_SESSION['admin_id']);
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
			if(M("admin")->updateByPk($_SESSION['admin_id'],$_POST))
			{
				C("application")->message(1,"修改个人信息成功");
			}
			else
			{
				C("application")->message(0,"修改个人信息失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function pwdAction()
	{
		if(!empty($_POST))
		{
			if(M("admin")->findCount(array('id'=>$_SESSION['admin_id'],'pwd'=>$_POST['old_pwd'])))
			{
				C("application")->message(3,"旧密码错误");
			}
			else
			{
				unset($_POST['old_pwd']);
				unset($_POST['pwd2']);
				$_POST['pwd'] = md5($_POST['pwd']);
				if(M("admin")->updateByPk($_SESSION['admin_id'],$_POST))
				{
					die("<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=gbk\"><script>function sptips(){window.top.location='".Url("quit","login")."'}</script></head><body onload=\"sptips()\"></body></html>");
				}
				else
				{
					C("application")->message(0,"修改密码失败");
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>