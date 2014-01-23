<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 16:37:27
         compiled from "D:\projects\www\admin\admin\view\public\foot.html" */ ?>
<?php /*%%SmartyHeaderCode:1647550c2fc475cdd98-33521567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08b4984de60547247d303fdc4c3354168674c007' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\public\\foot.html',
      1 => 1351605713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647550c2fc475cdd98-33521567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
    'k' => 0,
    'i' => 0,
    'app_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c2fc47648e42_33664710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c2fc47648e42_33664710')) {function content_50c2fc47648e42_33664710($_smarty_tpl) {?>    </div>
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
    <div id="footer"> <small>
      &#169; Copyright 2012 <a href="http://202.202.43.125" target="_blank">红岩网校工作站</a> | Powered by <a href="<?php echo Url('welcome','admin');?>
"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</a> | 服务电话：023-62461084 | 邮箱：<a href="mailto:redrock@cqupt.edu.cn">redrock@cqupt.edu.cn</a> </small> </div>
</div>
</body>
</html><?php }} ?>