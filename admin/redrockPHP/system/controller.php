<?php
/*
 * Controller :控制器类
 * author：djh
 */
 
abstract class Controller
{
	private $view = null;
	private $tpl_vals = array();
	
	public function __construct()
	{
		$this->view = loadSysClass("view","system",true);
		if($GLOBALS['_CFG']['auto']['auto_check_role'])
		{
			$db = loadSysClass("mysql","drivers",true);
			$role_id = isset($_SESSION['role_id']) ? $_SESSION['role_id'] : 0;
			$sql = "SELECT `role_power` AS `role` FROM `acl` 
					LEFT JOIN `role` ON `acl_role_id`=`role_id` 
					WHERE `acl_controller`='".$GLOBALS['_C']."' 
					AND `acl_action`='".$GLOBALS['_V']."'";
			$role = $db->fetchArray($db->Query($sql));
			if(isset($role['role']) && $role_id > $role['role'])
			{
				$this->message("你没有此访问权限",Url("index","index"));
			}
		}
		if($GLOBALS['_CFG']['auto']['auto_load_function'] && isset($this->auto_load_function))
		{
			foreach($this->auto_load_function['file'] as $val) F($val);
			foreach($this->auto_load_function['exec'] as $val)
			{
				if(!function_exists($val)) Error("函数{$val}未定义");
				$val($this);
			}
		}
		if(method_exists($this,"__initialize")) $this->__initialize();
	}
	
    /**
     *
     * 跳转程序
     *
     * 应用程序的控制器类可以覆盖该函数以使用自定义的跳转程序
     *
     * @param $url  需要前往的地址
     * @param $delay   延迟时间
     */
    public function jump($url, $delay = 0)
	{
		echo "<html><head><meta http-equiv='refresh' content='{$delay};url={$url}'></head><body></body></html>";
		exit;
    }
	
    /**
     *
     * 提示程序
     *
     * 应用程序的控制器类可以覆盖该函数以使用自定义的提示
     *
     * @param $msg   提示需要的相关信息
     * @param $url   跳转地址
     */
    public function message($msg, $url = "")
	{
		$url = empty($url) ? "window.history.back();" : "location.href=\"utf-8\";";
		echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset={$charset}\"><script>function sptips(){alert(\"{$msg}\");{$url}}</script></head><body onload=\"sptips()\"></body></html>";
		exit;
    }
	
	public function __set($name, $value)
	{
		if($GLOBALS['_CFG']['auto']['auto_assign'] == true && $value != false)
		{
			$this->assign($name,$value);
		}
	}
	
	public function __get($name)
	{ 
		return $this->tpl_vals[$name];
	}
	
	public function assign($key, $value)
	{
		$this->tpl_vals[$key] = $value;
		$this->view->assign($key,$value);
	}
	
	public function display($view = null, $control = null)
	{
		if(empty($view)) $view = $GLOBALS['_V'];
		if(empty($control)) $control = $GLOBALS['_C'];
		$tpl = $view.".".$control.".".$GLOBALS['_CFG']['smarty']['tpl_suffix'];
		if(file_exists($GLOBALS['_CFG']['path']['template_dir'].DS.$control.DS.$tpl))
		{
			$this->view->display($control.DS.$tpl);
		}
		else
		{
			$tpl = $GLOBALS['_V'].".".$GLOBALS['_C'].".".$GLOBALS['_CFG']['smarty']['tpl_suffix'];
			if(!file_exists($GLOBALS['_CFG']['path']['template_dir'].DS.$GLOBALS['_C'].DS.$tpl))
			{
				Error("系统找不到{$GLOBALS['_C']}/{$GLOBALS['_V']}的模板");
			}
			$this->view->display($GLOBALS['_C'].DS.$tpl);
		}
		exit;
	}
}
?>