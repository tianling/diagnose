<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 18:19:57
         compiled from "D:\sever\Apache\htdocs\diagnose\admin\admin\view\dialog\index.dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:2008850c3144d2f8845-83060240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de87168623b156ddff38005e51b52ba14988f31d' => 
    array (
      0 => 'D:\\sever\\Apache\\htdocs\\diagnose\\admin\\admin\\view\\dialog\\index.dialog.html',
      1 => 1351849527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2008850c3144d2f8845-83060240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'dialog' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c3144d4591f5_64911285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3144d4591f5_64911285')) {function content_50c3144d4591f5_64911285($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>日志管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">查看日志</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>日志ID</th>
				<th>发生用户</th>
                <th>controller</th>
                <th>action</th>
				<th>发生时间</th>
				<th>IP地址</th>
				<th>日志类型</th>
				<th>其他信息</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="8">
                  <div class="pagination"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['dialog']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dialog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['controller'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['action'];?>
</td>
                <td><?php echo datetime($_smarty_tpl->tpl_vars['i']->value['time']);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
</td>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==0){?><font color="red">error</font><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==1){?><font color="green">success</font><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==2){?><font color="blue">information</font><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==3){?><font color="yellow">attention</font><?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</td>
            </tr>
			<?php } ?>
			<?php }?>
            </tbody>
          </table>
        </div>
      </div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>