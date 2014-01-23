<?php
/*
 * Config :配置文件
 * author：djh
 */
return array(
	'db' => array(
		'host' => "localhost",//服务器地址
		'user' => "root",//用户名
		'pwd' => "",//密码
		'name' => "",//数据库名
		'handle' => "UTF8",//字符集
	),
	
	'smarty' => array(
		'tpl_suffix' => "html",//模板后缀名
		'left_delimiter' => "{[",//smarty左界定符
		'right_delimiter' => "]}",//smarty右界定符
		'debugging' => false,//smarty变量输出
		'caching' => false,//页面缓存
		'cache_lifetime' => 0, //缓存更新时间
	),
	
	'path' => array(
		'compile_dir' => "tmp",//临时文件目录
		'template_dir' => "view",//视图模板文件目录
		'config_dir' => "config",//配置文件目录
		'cache_dir' => "tmp",//临时文件目录
		'controller_dir' => "controller",//执行器目录
		'include_dir' => "include",//扩展文件目录
		'function_dir' => "include".DS."function",//函数文件目录
		'class_dir' => "include".DS."class",//类文件目录
		'model_dir' => "model",//数据模型文件目录
	),
	
	'auto' => array(
		'auto_assign' => false,//自动注册模板变量
		'auto_display' => false,//自动输出模板
		'auto_session' => false,//自动开启SESSION
		'auto_check_role' => false,//自动权限检测
		'auto_form_add' => false,//自动表单补充
		'auto_load_class' => false,//自动加载类
		'auto_load_function' => false,//自动加载函数
	),
	
	'app_name' => "redrockPHP",//站点名称
	'debug' => false,//错误提示
);
?>