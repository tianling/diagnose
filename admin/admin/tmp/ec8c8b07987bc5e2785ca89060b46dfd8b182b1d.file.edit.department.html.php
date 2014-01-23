<?php /* Smarty version Smarty-3.1.11, created on 2013-06-18 12:13:58
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/department/edit.department.html" */ ?>
<?php /*%%SmartyHeaderCode:214212002251c04f062792e6-40999478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec8c8b07987bc5e2785ca89060b46dfd8b182b1d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/department/edit.department.html',
      1 => 1353583558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214212002251c04f062792e6-40999478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51c04f0635dc37_93914986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c04f0635dc37_93914986')) {function content_51c04f0635dc37_93914986($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>角色管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1">角色管理</a></li>
          <li><a href="#tab2" class="default-tab">角色修改</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>角色ID</th>
                <th>角色名</th>
                <th>权限值</th>
				<th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="4">
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['role_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['role_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['role_power'];?>
</td>
                <td>
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['role_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['role_id'];?>
')" title="删除"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/cross.png" alt="删除" /></a>
				</td>
            </tr>
			<?php } ?>
			<?php }?>
            </tbody>
          </table>
        </div>
        <div class="tab-content default-tab" id="tab2">
			<form action="<?php echo Url('edit');?>
" method="post" onsubmit="return check(this)">
			<fieldset>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['role_id'];?>
" />
			<p>
              角 色 名 <input class="text-input small-input" type="text" id="small-input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['role_name'];?>
"/>
			</p>
            <p>
              权 限 值 <input class="text-input small-input" type="text" id="small-input" name="power" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['role_power'];?>
"/>
			</p>
            <p>
              <input class="button" type="submit" value="修 改" />
            </p>
            </fieldset>
			</form>
            <div class="clear"></div>
        </div>
      </div>
<?php echo $_smarty_tpl->getSubTemplate ("../public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
function check(thisform)
{with(thisform){
	if(name.value==''){
		name.focus();
		return false;
	}
	if(power.value==''){
		power.focus();
		return false;
	}
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该角色吗？')) return false;
	location = url;
}
</script><?php }} ?>