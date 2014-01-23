<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 16:39:33
         compiled from "D:\projects\www\admin\admin\view\menu\edit.menu.html" */ ?>
<?php /*%%SmartyHeaderCode:871750c2fcc573faa8-84275135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd543fbe7fc76794d54d7acdcac69b645f4fd775f' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\menu\\edit.menu.html',
      1 => 1353583615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '871750c2fcc573faa8-84275135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
    'j' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c2fcc5a896b0_96709523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c2fcc5a896b0_96709523')) {function content_50c2fcc5a896b0_96709523($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>菜单管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1">菜单管理</a></li>
          <li><a href="#tab2" class="default-tab">菜单修改</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>菜单名称</th>
                <th>控制器</th>
                <th>执行器</th>
				<th>排列序号</th>
                <th>快捷方式</th>
				<th></th>
              </tr>
            </thead>
            <tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['list']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_controller'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_action'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_order'];?>
</td>
                <td> - </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['menu_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['menu_id'];?>
')" title="删除"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/cross.png" alt="删除" /></a>
				</td>
            </tr>
				<?php if (isset($_smarty_tpl->tpl_vars['i']->value['list'])){?>
				<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
				<tr>
					<td>└<?php echo $_smarty_tpl->tpl_vars['j']->value['menu_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['j']->value['menu_controller'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['j']->value['menu_action'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['j']->value['menu_order'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['j']->value['menu_shortcut']==1){?>是<?php }else{ ?>否<?php }?></td>
					<td>
					  <a href="<?php echo Url('shortcut');?>
&id=<?php echo $_smarty_tpl->tpl_vars['j']->value['menu_id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['j']->value['menu_shortcut']==0){?>快捷<?php }else{ ?>取消<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/hammer_screwdriver.png"/></a>
					  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['j']->value['menu_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
					  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['j']->value['menu_id'];?>
')" title="删除"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/cross.png" alt="删除" /></a>
					</td>
				</tr>
				<?php } ?>
				<?php }?>
			<?php } ?>
			<?php }?>
            </tbody>
          </table>
        </div>
        <div class="tab-content default-tab" id="tab2">
			<form action="<?php echo Url('edit');?>
" method="post" onsubmit="return check(this)">
			<fieldset>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['menu_id'];?>
"/>
            <p>
              上级菜单
              <select name="father_id" class="small-input">
				<option value="0">父菜单</option>
				<?php if (isset($_smarty_tpl->tpl_vars['list']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['menu_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['menu_id']==$_smarty_tpl->tpl_vars['result']->value['menu_father_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['menu_name'];?>
</option>
				<?php } ?>
				<?php }?>
              </select>
            </p>
            <p>
              菜单名称
			  <input class="text-input small-input" type="text" id="small-input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['menu_name'];?>
"/>
			</p>
            <p>
              控 制 器 <input class="text-input small-input" type="text" id="small-input" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['menu_controller'];?>
"/>
			</p>
            <p>
			  执 行 器 <input class="text-input small-input" type="text" id="small-input" name="action" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['menu_action'];?>
"/>
			</p>
            <p>
			  排列序号 <input class="text-input small-input" type="text" id="small-input" name="order" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['menu_order'];?>
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
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该菜单吗？')) return false;
	location = url;
}
</script><?php }} ?>