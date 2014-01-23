<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 18:20:04
         compiled from "D:\sever\Apache\htdocs\diagnose\admin\admin\view\administrator\index.administrator.html" */ ?>
<?php /*%%SmartyHeaderCode:2307650c3145462d4a2-08255951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11820280c3df81515975cce8c5cdcf842e821327' => 
    array (
      0 => 'D:\\sever\\Apache\\htdocs\\diagnose\\admin\\admin\\view\\administrator\\index.administrator.html',
      1 => 1353587906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2307650c3145462d4a2-08255951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c3145477c8a1_60917390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3145477c8a1_60917390')) {function content_50c3145477c8a1_60917390($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>权限管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">权限管理</a></li>
          <li><a href="#tab2">权限添加</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>权限ID</th>
                <th>权限名</th>
                <th>控制器</th>
				<th>执行器</th>
				<th>角色名</th>
				<th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6">
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['acl_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['acl_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['acl_controller'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['acl_action'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['role_name'];?>
</td>
                <td>
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['acl_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['acl_id'];?>
')" title="删除"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/cross.png" alt="删除" /></a>
				</td>
            </tr>
			<?php } ?>
			<?php }?>
            </tbody>
          </table>
        </div>
        <div class="tab-content" id="tab2">
			<form action="<?php echo Url('add');?>
" method="post" onsubmit="return check(this)">
			<fieldset>
            <p>
              权 限 名 <input class="text-input small-input" type="text" id="small-input" name="name" />
			</p>
            <p>
              控 制 器 <input class="text-input small-input" type="text" id="small-input" name="controller" />
			</p>
            <p>
              执 行 器 <input class="text-input small-input" type="text" id="small-input" name="action" />
			</p>
            <p>
              角色访问
              <select name="role_id" class="small-input">
				<?php if (isset($_smarty_tpl->tpl_vars['role']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['role_name'];?>
</option>
				<?php } ?>
				<?php }?>
              </select>
            </p>
            <p>
              <input class="button" type="submit" value="添 加" />
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
	if(controller.value==''){
		controller.focus();
		return false;
	}
	if(action.value==''){
		action.focus();
		return false;
	}
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该访问权限吗？')) return false;
	location = url;
}
</script><?php }} ?>