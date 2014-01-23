<?php
$config = array(
	'db' => array(
		'host' => "localhost",//服务器地址
		'user' => "tianling",//用户名
		'pwd' => "887976",//密码
		'name' => "diagnose",//数据库名
		'handle' => "UTF8",//字符集
	),
	
	'smarty' => array(
		'debugging' => false,//smarty变量输出
		'caching' => false,//页面缓存
		'cache_lifetime' => 0, //缓存更新时间
	),
	
	'auto' => array(
		'auto_assign' => true,//自动注册模板变量
		'auto_display' => false,//自动输出模板
		'auto_session' => true,//自动开启SESSION
		'auto_check_role' => true,//自动权限检测
		'auto_form_add' => true,//自动表单补充
		'auto_load_class' => true,//自动加载类
		'auto_load_function' => true,//自动函数加载
	),
	
	'app_name' => "自动挂号",
	'debug' => true,//错误提示
);
?>