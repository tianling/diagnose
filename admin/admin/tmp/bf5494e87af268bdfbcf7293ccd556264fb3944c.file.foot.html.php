<?php /* Smarty version Smarty-3.1.11, created on 2013-01-25 13:10:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/public/foot.html" */ ?>
<?php /*%%SmartyHeaderCode:14683286075102846397c034-88938877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5494e87af268bdfbcf7293ccd556264fb3944c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/public/foot.html',
      1 => 1355050610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14683286075102846397c034-88938877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
    'k' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_510284639bd153_87063356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510284639bd153_87063356')) {function content_510284639bd153_87063356($_smarty_tpl) {?>    </div>
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