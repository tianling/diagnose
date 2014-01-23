<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 18:19:54
         compiled from "D:\sever\Apache\htdocs\diagnose\admin\admin\view\public\message.html" */ ?>
<?php /*%%SmartyHeaderCode:1737150c3144a520906-04818531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '125cf1a3c600be3813868819cd7de50c3ae6531b' => 
    array (
      0 => 'D:\\sever\\Apache\\htdocs\\diagnose\\admin\\admin\\view\\public\\message.html',
      1 => 1353583676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1737150c3144a520906-04818531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'i' => 0,
    'ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c3144a5509f8_49478343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3144a5509f8_49478343')) {function content_50c3144a5509f8_49478343($_smarty_tpl) {?>		<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<div class="notification <?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
 png_bg">
		<a href="#" class="close"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/cross_grey_small.png" title="关闭" alt="关闭" /></a>
		  <div><?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>
</div>
		</div>
		<?php } ?>
		<?php }?><?php }} ?>