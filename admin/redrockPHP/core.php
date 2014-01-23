<?php
/*
 * core :核心
 * author：djh
 */
define('VERSION', '1.0.0'); // 当前框架版本
//if(substr(PHP_VERSION, 0, 1) != '5') exit("SpeedPHP框架环境要求PHP5！");
if(!defined("DS"))
{
	define("DS",DIRECTORY_SEPARATOR);
}
if(!defined("ROOT_PATH"))
{
	define("ROOT_PATH",dirname(__FILE__).DS);
}
if(!defined("CORE_PATH"))
{
	define("CORE_PATH",APP_PATH."redrockPHP".DS);
}
//路由处理
if(isset($__url_rewrite))
{
	if(empty($__url_rewrite['root']))
	{
		define("ROOT_NAME","/");
	}
	else
	{
		define("ROOT_NAME","/".$__url_rewrite['root']."/");
	}
	preg_match_all("#([^/|.|?]+)#", $_SERVER['REQUEST_URI'], $match);
	$match = array_pop($match);
	$query_string = array();
	foreach($match as $val)
	{
		if($val == $__url_rewrite['suffix'] || $__url_rewrite['root'] == $val) continue;
		$query_string[] = $val;
	}
	$total = count($query_string);
	$_M = isset($query_string[0]) && $total >=3 ? array_shift($query_string) : "index";
	$_C = isset($query_string[0]) && $total >=3  ? array_shift($query_string) : "index";
	$_V = isset($query_string[0]) && $total >=3  ? array_shift($query_string) : "index";
	$args = isset($query_string[0]) ? array_shift($query_string) : "";
	if(isset($args))
	{
		preg_match_all("#&|([^=]+)=([^&]+)#", $args, $match);
		if(!empty($match))
		{
			foreach($match[0] as $key => $val)
			{
				if($val == "&") continue;
				$_GET[$match[1][$key]] = $match[2][$key];
			}
		}
	}
}
else
{
	$_M = isset($_GET['m']) ? $_GET['m'] : "index";
	$_C = isset($_GET['c']) ? $_GET['c'] : "index";
	$_V = isset($_GET['a']) ? $_GET['a'] : "index";
}
define("APP_PATH",ROOT_PATH.$_M.DS);
// 载入核心函数库
include CORE_PATH."functions.php";
// 载入配置文件
$_CFG = include(CORE_PATH."config".DS."config.php");
if(file_exists(APP_PATH."config".DS."config.php"))
{
	include(APP_PATH."config".DS."config.php");
	if(isset($config))
	{
		$_CFG = spConfigReady($_CFG,$config);
		unset($config);
	}
}
if ($_CFG['debug'])
{
	if(substr(PHP_VERSION, 0, 3) == "5.3")
	{
		error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
	}
	else
	{
		error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	}
}
else
{
	error_reporting(0);
}
foreach($_CFG['path'] as $key => &$val)
{
	$val = APP_PATH.$val;
}
if(isset($GLOBALS['_CFG']['app_name']))
{
	define("APP_NAME",$GLOBALS['_CFG']['app_name']);
}
if($_CFG['auto']['auto_session']) session_start();
?>