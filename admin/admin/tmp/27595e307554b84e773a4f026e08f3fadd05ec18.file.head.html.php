<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 16:37:27
         compiled from "D:\projects\www\admin\admin\view\public\head.html" */ ?>
<?php /*%%SmartyHeaderCode:750950c2fc474ec730-42805548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27595e307554b84e773a4f026e08f3fadd05ec18' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\public\\head.html',
      1 => 1353583410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750950c2fc474ec730-42805548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT' => 0,
    'shortcut' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c2fc47573f50_03069641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c2fc47573f50_03069641')) {function content_50c2fc47573f50_03069641($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/css/invalid.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/facebox.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/scripts/jquery.date.js"></script>
</head>
<body>
<div id="main-content">
	<ul class="shortcut-buttons-set">
		<?php if (isset($_smarty_tpl->tpl_vars['shortcut']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shortcut']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<li>
			<a class="shortcut-button" href="<?php echo Url($_smarty_tpl->tpl_vars['i']->value['menu_action'],$_smarty_tpl->tpl_vars['i']->value['menu_controller']);?>
"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_name'];?>
</span></a>
		</li>
		<?php } ?>
		<?php }?>
		<!--<li>
			<a class="shortcut-button" href="#messages" rel="modal"><span>留言板</span></a>
		</li>-->
    </ul>
    <div class="clear"></div>
    <div class="content-box"><?php }} ?>