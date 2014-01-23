<?php
class login extends Controller
{
	public $auto_load_function = array(
		'file' => array("get"),
		'exec' => array(),
	);

	public function indexAction()
	{
		if(isset($_SESSION['admin_id']) && isset($_SESSION['role_id']))
		{
			header("location:".Url("index","admin"));
		}
		$this->display();
	}
	
	public function quitAction()
	{
		session_unset();
		session_destroy();
		$this->jump(Url("index"));
	}
	
	public function loginAction()
	{
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$result = M("admin")->select()->findBy("name",$_POST['username']);
			$this->username = $_POST['username'];
			if(empty($result))
			{
				C("application")->dialog("用户名不正确",$_POST['username'],3);
				$this->message = "用户名不正确";
				$this->display("index");
			}
			if($result['admin_remain_times'] == 0)
			{
				C("application")->dialog("尝试登录密码锁定账户",$_POST['username'],3);
				$this->message = "已无剩余尝试次数，你的账户被锁定";
				$this->display("index");
			}
			if($result['admin_pwd'] != md5($_POST['password']))
			{
				$remain = $result['admin_remain_times'];
				if(M("admin")->optFieldByPk($result['admin_id'],"remain_times",-1))
				{
					$remain -= 1;
				}
				C("application")->dialog("口令不正确",$_POST['username'],3);
				$this->message = "口令不正确,剩余尝试次数:".$remain;
				$this->display("index");
			}
			if($result['admin_lock'] == 1)
			{
				C("application")->dialog("登录后台锁定帐号",$_POST['username'],3);
				$this->message = "你的账户已锁定";
				$this->display("index");
			}
			$_SESSION['admin_id'] = $result['admin_id'];
			$_SESSION['name'] = $result['admin_name'];
			$_SESSION['time'] = $result['admin_login_time'];
			$_SESSION['ip'] = $result['admin_login_ip'];
			$_SESSION['role_id'] = $result['role_power'];
			M("admin")->updateBy("id",$result['admin_id'],array('login_time'=>time(),'login_ip'=>ip()));
			C("application")->dialog("登录成功",$_POST['username'],1);
			$this->jump(Url("index","admin"));
		}
		$this->display("index");
	}
}
?>