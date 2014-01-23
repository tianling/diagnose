<?php
class menu extends Controller
{
	public $auto_load_function = array(
		'file' => array("admin","get"),
		'exec' => array("acl_check","shortcut","notice"),
	);
	
	public function __initialize()
	{
		$list = M("menu")->findAll(array('father_id'=>"0"),"`menu_order`");
		foreach($list as $key => &$val)
		{
			$val['list'] = M("menu")->findAll(array('father_id'=>$val['menu_id']),"`menu_order`");
		}
		$this->list = $list;
	}
	
	public function jump($url,$charset = "gbk")
	{
		$url = empty($url) ? "window.history.back();" : "location.href=\"{$url}\";";
		echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset={$charset}\"><script>function sptips(){window.parent.frames.left_frame.location.reload();{$url}}</script></head><body onload=\"sptips()\"></body></html>";
		exit;
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
			if(M("menu")->updateAuto())
			{
				C("application")->message(1,"修改菜单信息成功");
			}
			else
			{
				C("application")->message(0,"修改菜单信息失败");
			}
			$this->jump(Url("index"));
		}
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$this->result = M("menu")->findByPk($_GET['id']);
			$this->display("edit");
		}
		$this->jump(Url("index"));
	}
	
	public function deleteAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			if(M("menu")->deleteBy("father_id",$_GET['id']) && M("menu")->deleteByPk($_GET['id']))
			{
				C("application")->message(1,"删除菜单成功");
			}
			else
			{
				C("application")->message(0,"删除菜单失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function addAction()
	{
		if(empty($_POST))
		{
			$this->jump(Url("index"));
		}
		if(M("menu")->findCount($_POST))
		{
			C("application")->message(2,"{$_POST['name']}菜单已存在");
		}
		else
		{
			if(M("menu")->createAuto())
			{
				C("application")->message(1,"添加菜单成功");
			}
			else
			{
				C("application")->message(0,"添加菜单失败");
			}
		}
		$this->jump(Url("index"));
	}
	
	public function shortcutAction()
	{
		if(isset($_GET['id']) && is_numeric($_GET['id']))
		{
			$result = M("menu")->findByPk($_GET['id']);
			if(empty($result))
			{
				C("application")->message(4,"操作不存在的菜单");
			}
			else
			{
				$result['menu_shortcut'] = $result['menu_shortcut'] ? "0" : "1";
				if(M("menu")->updateByPk($result['menu_id'],array("shortcut"=>$result['menu_shortcut'])))
				{
					C("application")->message(1,"快捷方式操作成功");
				}
				else
				{
					C("application")->message(0,"创建快捷操作失败");
				}
			}
		}
		$this->jump(Url("index"));
	}
}
?>