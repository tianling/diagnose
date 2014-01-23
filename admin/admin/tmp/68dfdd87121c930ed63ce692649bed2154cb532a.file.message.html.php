<?php /* Smarty version Smarty-3.1.11, created on 2013-01-25 13:11:02
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/public/message.html" */ ?>
<?php /*%%SmartyHeaderCode:1495425020510284665e2141-48079072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68dfdd87121c930ed63ce692649bed2154cb532a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/public/message.html',
      1 => 1353583676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495425020510284665e2141-48079072',
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
  'unifunc' => 'content_51028466607e73_40754650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51028466607e73_40754650')) {function content_51028466607e73_40754650($_smarty_tpl) {?>		<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
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