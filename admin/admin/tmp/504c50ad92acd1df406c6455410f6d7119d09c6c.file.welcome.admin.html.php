<?php /* Smarty version Smarty-3.1.11, created on 2013-01-25 13:10:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/admin/welcome.admin.html" */ ?>
<?php /*%%SmartyHeaderCode:1111723634510284638921b6-84435729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504c50ad92acd1df406c6455410f6d7119d09c6c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/admin/welcome.admin.html',
      1 => 1355050566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111723634510284638921b6-84435729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_name' => 0,
    'welcome' => 0,
    'k' => 0,
    'i' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51028463914976_81040103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51028463914976_81040103')) {function content_51028463914976_81040103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>欢迎登录</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">系统说明</a></li>
		  <li><a href="#tab2">系统信息</a></li>
		  <li><a href="#tab3">个人信息</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <fieldset>
			<p>当前版本 Developer Preview  该后台管理系统供<b><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</b>使用！</p>
            </fieldset>
            <div class="clear"></div>
        </div>
        <div class="tab-content" id="tab2">
            <fieldset>
			<p>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['welcome']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<p><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ： <font color="blue"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</font></p>
				<?php } ?>
			</p>
            </fieldset>
            <div class="clear"></div>
        </div>
        <div class="tab-content" id="tab3">
            <fieldset>
			<p>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['login']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<p><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ： <?php echo datetime($_smarty_tpl->tpl_vars['i']->value);?>
</p>
				<?php } ?>
			</p>
            </fieldset>
            <div class="clear"></div>
        </div>
      </div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>