<?php
class admin extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function indexAction()
	{
		$this->display();
	}
	
	public function leftAction()
	{
		$list = M("menu")->findAll(array('father_id'=>0),"`menu_order`");
		foreach($list as $key => &$val)
		{
			$val['list'] = M("menu")->findAll(array('father_id'=>$val['menu_id']),"`menu_order`");
		}
		$this->list = $list;
		$this->name = $_SESSION['name'];
		$this->display();
	}
	
	public function welcomeAction()
	{
		$this->welcome = array(
			'PHP程序版本' => phpversion(),
			'MYSQL 版本' => mysql_get_server_info(),
			'服务器端信息' => apache_get_version(),
			'最大POST限制' => ini_get("post_max_size"),
			'最大上传限制' => ini_get("upload_max_filesize"),
			'最大执行时间' => ini_get("max_execution_time"),
			'服务器时间' => date("Y-m-d H:i"),
		);
		$this->login = array(
			'用户姓名' => $_SESSION['name'],
			'上次登录时间' => $_SESSION['time'],
			'上次登录IP' => $_SESSION['ip'],
		);
		$this->display();
	}
}
?>