<?php
/*
 * function :核心函数
 * author：djh
 */
function Run()
{
	loadSysClass("smarty","smarty");
	loadSysClass("controller","system");
	loadSysClass("model","system");
	if($GLOBALS['_CFG']['auto']['auto_load_class']) spl_autoload_register("auto_load_class");
	$control = loadClass($GLOBALS['_C'],$GLOBALS['_CFG']['path']['controller_dir'].DS);
	$action = $GLOBALS['_V']."Action";
	if(!is_object($control))
	{
		Error("控制器{$GLOBALS['_C']}不存在");
	}
	if(!method_exists($control,$action))
	{
		Error("执行器{$GLOBALS['_V']}不存在");
	}
	if(defined("APP_NAME"))
	{
		$control->assign("app_name",APP_NAME);
	}
	if(defined("ROOT_NAME"))
	{
		$control->assign("ROOT",ROOT_NAME.$GLOBALS['_M']."/");
	}
	else
	{
		$control->assign("ROOT",$GLOBALS['_M']."/");
	}
	$control->$action();
	if($GLOBALS['_CFG']['auto']['auto_display'])
	{
		$control->display($GLOBALS['_V'],$GLOBALS['_C']);
	}
}

function loadSysClass($className, $path = null, $initialized = false)
{
	return loadClass($className, CORE_PATH.$path.DS, $initialized);
}

function loadModel($modelName, $initialized = true)
{
	return loadClass($modelName."Model", $GLOBALS['_CFG']['path']['model_dir'].DS, $initialized);
}

function M($className)
{ 
	return loadModel($className, true);
}

function loadClass($className, $path = null, $initialized = true)
{
	static $_class = array();
	$key = md5($className);
	if(isset($_class[$key])) return $_class[$key];
	if(empty($path)) $path = $GLOBALS['_CFG']['path']['class_dir'].DS;
	loadFile($className, $path);
	if(!class_exists($className))
	{
		Error("{$className}类未被定义");
	}
	if($initialized == true)
	{
		$_class[$key] = new $className();
	}
	else
	{
		$_class[$key] = true;
	}
	return $_class[$key];
}

function C($className,$initialized = true)
{ 
	return loadClass($className, null, $initialized);
}

function auto_load_class($className)
{
	loadClass($className, null, false);
}

function loadFunction($funcName, $path = null)
{
	static $_func = array();
	$key = md5($funcName);
	if(isset($_func[$key])) return $_func[$key];
	if(empty($path)) $path = $GLOBALS['_CFG']['path']['function_dir'].DS;
	loadFile($funcName, $path);
	return $_func[$key] = true;
}

function F($funcName)
{
	return loadFunction($funcName,null);
}
	
function loadFile($fileName, $path = null)
{
	if(empty($path)) $path = $GLOBALS['_CFG']['path']['include_dir'].DS;
	if(!file_exists($path.$fileName.".php"))
	{
		Error("系统找不到{$path}{$fileName}.php文件");
	}
	include_once $path.$fileName.".php";
}
 
function sql_encode($string)
{
	if(get_magic_quotes_gpc()) return $string;
	if(is_array($string))
	{
		foreach($string as $key => &$value)
		{
			$value = sql_encode($value);
		}
	}
	else
	{
		$string = mysql_real_escape_string($string);
	}
	return $string;
}

function rs_decode($string)
{
	if(is_array($string))
	{
		foreach($string as $key => &$value)
		{
			$value = rs_decode($value);
		}
	}
	else
	{
		$string = stripslashes($string);
	}
	return $string;
}

function html_encode($string)
{
	if(is_array($string))
	{
		foreach($string as $key => &$value)
		{
			$value = html_encode($value);
		}
	}
	else
	{
		$string = htmlspecialchars($string);
	}
	return $string;
}

function html_decode($string)
{
	if(is_array($string))
	{
		foreach($string as $key => &$value)
		{
			$value = html_decode($value);
		}
	}
	else
	{
		$string = htmlspecialchars_decode($string);
	}
	return $string;
}

/**
 * spConfigReady   快速将用户配置覆盖到框架默认配置
 * 
 * @param preconfig    默认配置
 * @param useconfig    用户配置
 */
function spConfigReady($preconfig, $useconfig = null)
{
	$nowconfig = $preconfig;
	if (is_array($useconfig))
	{
		foreach ($useconfig as $key => $val)
		{
			if (is_array($useconfig[$key]))
			{
				@$nowconfig[$key] = is_array($nowconfig[$key]) ? spConfigReady($nowconfig[$key], $useconfig[$key]) : $useconfig[$key];
			}
			else
			{
				@$nowconfig[$key] = $val;
			}
		}
	}
	return $nowconfig;
}

function Error($message, $code = null, $traces = null)
{
	if($GLOBALS['_CFG']['debug'])
	{
		if($traces == null) $traces = debug_backtrace();
		include(CORE_PATH."error.php");
	}
	exit;
}

function Url($v = null,$c = null,$m = null)
{
	$m = empty($m) ? $GLOBALS['_M'] : $m;
	$c = empty($c) ? $GLOBALS['_C'] : $c;
	$v = empty($v) ? $GLOBALS['_V'] : $v;
	if(isset($GLOBALS['__url_rewrite']))
	{
		$root = $GLOBALS['__url_rewrite']['root'];
		$suffix = $GLOBALS['__url_rewrite']['suffix'];
		$sep = $GLOBALS['__url_rewrite']['sep'];
		if(empty($root)) return $sep.$m.$sep.$c.$sep.$v.".".$suffix;
		else return $sep.$root.$sep.$m.$sep.$c.$sep.$v.".".$suffix;
	}
	else
	{
		return "index.php?m=".$m."&c=".$c."&a=".$v;
	}
}


function datetime($time = null,$format = 'Y-m-d H:i:s')
{
	if(!is_numeric($time)) return $time;
	if($time == null)
	{
		return date($format);
	}
	else
	{
		return date($format,$time);
	}
}

function ip()
{
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')){
		$ip = getenv('HTTP_CLIENT_IP');
	}
	elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown'))
	{
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown'))
	{
		$ip = getenv('REMOTE_ADDR');
	}
	elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown'))
	{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
}

///去除 空格 和 标签  字符串
function cut($str, $length, $start = 0, $suffix = '...', $charset = "utf-8")
{
	$str = trim(str_replace(array('&nbsp;',' '),array('',''), strip_tags($str)));
	if(function_exists("mb_substr"))
	{
		$slice = mb_substr($str, $start, $length, $charset);
	}
	elseif(function_exists('iconv_substr'))
	{
		$slice = iconv_substr($str,$start,$length,$charset);
	}
	else
	{
		$re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
		$re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
		$re['gbk']	  = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
		$re['big5']	  = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
		preg_match_all($re[$charset], $str, $match);
		$slice = join("",array_slice($match[0], $start, $length));
	}
	if(strlen($slice) < strlen($str) && $suffix)
	{	
		return $slice.$suffix;
	}
	else
	{
		return $slice;
	}
}
?>