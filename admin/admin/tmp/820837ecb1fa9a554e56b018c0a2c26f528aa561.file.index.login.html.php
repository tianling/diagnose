<?php /* Smarty version Smarty-3.1.11, created on 2013-01-25 13:10:51
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/login/index.login.html" */ ?>
<?php /*%%SmartyHeaderCode:6113975025102845bd8a679-69571148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '820837ecb1fa9a554e56b018c0a2c26f528aa561' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/login/index.login.html',
      1 => 1353583590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6113975025102845bd8a679-69571148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT' => 0,
    'app_name' => 0,
    'message' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5102845be00b97_40666150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5102845be00b97_40666150')) {function content_5102845be00b97_40666150($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
	<div id="login-top">
		<h1 style="position:static;"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
后台管理系统</h1>
	</div>
  <div id="login-content">
    <form action="<?php echo Url('login');?>
" method="post">
      <?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
	  <div class="notification information png_bg">
        <div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
      </div>
	  <?php }?>
      <p>
        <label>用户名</label>
        <input class="text-input" type="text" name="username" <?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"<?php }?>/>
      </p>
      <div class="clear"></div>
      <p>
        <label>口令</label>
        <input class="text-input" type="password" name="password"/>
      </p>
      <div class="clear"></div>
      <!--<p id="remember-password">
        <input type="checkbox" name="remember"/>
        记住我</p>
      <div class="clear"></div>-->
      <p>
        <input class="button" type="submit" value="登 录" />
      </p>
    </form>
  </div>
</div>
</body>
</html>
<?php }} ?>