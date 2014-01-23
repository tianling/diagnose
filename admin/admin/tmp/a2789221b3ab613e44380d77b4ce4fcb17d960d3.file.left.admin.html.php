<?php /* Smarty version Smarty-3.1.11, created on 2013-01-25 13:10:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/admin/left.admin.html" */ ?>
<?php /*%%SmartyHeaderCode:51478581851028463781792-06250308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2789221b3ab613e44380d77b4ce4fcb17d960d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/admin/left.admin.html',
      1 => 1353584010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51478581851028463781792-06250308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT' => 0,
    'app_name' => 0,
    'name' => 0,
    'list' => 0,
    'i' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5102846383d075_97976372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5102846383d075_97976372')) {function content_5102846383d075_97976372($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/facebox.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/jquery.wysiwyg.js"></script>
</head>
<body style= "overflow-x:hidden ">
	<div id="sidebar">
    <div id="sidebar-wrapper">
		<h1 id="sidebar-title" style="position:static">
			<a href="<?php echo Url('welcome');?>
" target="main"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
后台管理</a>
		</h1>
		<div id="profile-links">
			你好, <a href="<?php echo Url('index','person');?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="main" ><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
			&nbsp;&nbsp;
			<a href="<?php echo Url('index','index');?>
" title="网站首页" target="_blank">网站首页</a> |
			<a href="javascript:window.top.location='<?php echo Url('quit','login');?>
'" title="退出" target="main">退出</a>
		</div>
		<ul id="main-nav">
        <li>
			<a class="nav-top-item"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</a>
			<ul>
				<li><a href="<?php echo Url('welcome','admin');?>
" target="main">欢迎登录</a></li>
			</ul>
		</li>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		<li>
			<a class="nav-top-item"><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_name'];?>
</a>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
				<li><a href="<?php echo Url($_smarty_tpl->tpl_vars['j']->value['menu_action'],$_smarty_tpl->tpl_vars['j']->value['menu_controller']);?>
" target="main"><?php echo $_smarty_tpl->tpl_vars['j']->value['menu_name'];?>
</a></li>
				<?php } ?>
			</ul>
        </li>
		<?php } ?>
		</ul>
    </div>
  </div>
</body>
</html><?php }} ?>