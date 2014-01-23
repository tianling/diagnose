<?php /* Smarty version Smarty-3.1.11, created on 2012-12-09 18:57:18
         compiled from "D:\sever\Apache\htdocs\diagnose\admin\admin\view\public\foot.html" */ ?>
<?php /*%%SmartyHeaderCode:214050c314428f6334-84573337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4c77d26b0f9618e7ef1d3769010a7235ebcab7' => 
    array (
      0 => 'D:\\sever\\Apache\\htdocs\\diagnose\\admin\\admin\\view\\public\\foot.html',
      1 => 1355050611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214050c314428f6334-84573337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c3144298d468_54816614',
  'variables' => 
  array (
    'notice' => 0,
    'k' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3144298d468_54816614')) {function content_50c3144298d468_54816614($_smarty_tpl) {?>    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['notice']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
	<div class="content-box column-<?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>left<?php }else{ ?>right<?php }?>">
      <div class="content-box-header">
        <h3><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</h3>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab">
          <h4><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
于<?php echo datetime($_smarty_tpl->tpl_vars['i']->value['time']);?>
发布</h4>
          <p><?php echo html_decode($_smarty_tpl->tpl_vars['i']->value['message']);?>
</p>
        </div>
      </div>
    </div>
	<?php } ?>
	<?php }?>
    <div class="clear"></div>
</div>
</body>
</html><?php }} ?>