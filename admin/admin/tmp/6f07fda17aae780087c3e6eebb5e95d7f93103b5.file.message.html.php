<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 16:37:27
         compiled from "D:\projects\www\admin\admin\view\public\message.html" */ ?>
<?php /*%%SmartyHeaderCode:497050c2fc47582617-10325411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f07fda17aae780087c3e6eebb5e95d7f93103b5' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\public\\message.html',
      1 => 1353583676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497050c2fc47582617-10325411',
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
  'unifunc' => 'content_50c2fc475b9e44_03190306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c2fc475b9e44_03190306')) {function content_50c2fc475b9e44_03190306($_smarty_tpl) {?>		<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
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