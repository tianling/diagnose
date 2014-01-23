<?php /* Smarty version Smarty-3.1.11, created on 2013-01-25 13:11:02
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/register/index.register.html" */ ?>
<?php /*%%SmartyHeaderCode:110240884651028466513ba8-00946956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57402a5986bbe807c359dcd4730bbb60d1a74bc8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/register/index.register.html',
      1 => 1355147406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110240884651028466513ba8-00946956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_510284665dbc71_89628650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510284665dbc71_89628650')) {function content_510284665dbc71_89628650($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>挂号信息</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">挂号信息</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>姓名</th>
                <th>性别</th>
                <th>电话</th>
				<th>地址</th>
				<th>主治医生</th>
				<th>科室</th>
                <th>病史</th>
				<th>状态</th>
				<th></th>
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
			<?php if (isset($_smarty_tpl->tpl_vars['list']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['i']->value['user_sex']==1){?>男<?php }else{ ?>女<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_tel'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_adress'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['doctor_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['office_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_message'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['i']->value['user_lock']==1){?>通过<?php }else{ ?>待审核<?php }?></td>
                <td>
				   <a href="<?php echo Url('lock');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['user_id'];?>
" title="审核"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/hammer_screwdriver.png"/></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['user_id'];?>
')" title="删除"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/cross.png" alt="删除" /></a>
				</td>
            </tr>
			<?php } ?>
			<?php }?>
            </tbody>
          </table>
        </div>
      </div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
function cf(url)
{
	if(!confirm('确定要删除该信息吗？')) return false;
	location = url;
}
</script><?php }} ?>