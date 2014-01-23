<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 16:37:48
         compiled from "D:\projects\www\admin\admin\view\user\index.user.html" */ ?>
<?php /*%%SmartyHeaderCode:2029150c2fc5ce8ae57-47539952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efe9411180e4f43aa46bdc4e51f2c1d45682e9ef' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\user\\index.user.html',
      1 => 1353583666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029150c2fc5ce8ae57-47539952',
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
  'unifunc' => 'content_50c2fc5d0bb6d5_63881217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c2fc5d0bb6d5_63881217')) {function content_50c2fc5d0bb6d5_63881217($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>账户管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">账户管理</a></li>
          <li><a href="#tab2">账户添加</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>账户ID</th>
                <th>用户名</th>
                <th>姓名</th>
				<th>邮箱</th>
                <th>角色</th>
				<th>登录时间</th>
				<th>登录IP</th>
				<th>剩余次数</th>
				<th>状态</th>
				<th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="10">
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['admin_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['admin_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['admin_real_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['admin_email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['role_name'];?>
</td>
				<td><?php echo datetime($_smarty_tpl->tpl_vars['i']->value['admin_login_time']);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['admin_login_ip'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['admin_remain_times'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['i']->value['admin_lock']==1){?>锁定<?php }else{ ?>正常<?php }?></td>
                <td>
				  <a href="<?php echo Url('lock');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['admin_id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['i']->value['admin_lock']==0){?>锁定<?php }else{ ?>解锁<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/hammer_screwdriver.png"/></a>
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['admin_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['admin_id'];?>
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
              用 户 名 <input class="text-input small-input" type="text" id="small-input" name="name" />
			</p>
            <p>
              真实姓名 <input class="text-input small-input" type="text" id="small-input" name="real_name" />
			</p>
            <p>
               &nbsp;&nbsp;密 码 &nbsp;&nbsp;<input class="text-input small-input" type="password" id="small-input" name="pwd" />
			</p>
            <p>
			  验证密码 <input class="text-input small-input" type="password" id="small-input" name="pwd2" />
			</p>
            <p>
              &nbsp;&nbsp;邮 箱 &nbsp;&nbsp; <input class="text-input small-input" type="text" id="small-input" name="email" />
			</p>
            <p>
              用户角色
              <select name="role" class="small-input">
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
	if(real_name.value==''){
		real_name.focus();
		return false;
	}
	if(pwd.value==''){
		password.focus();
		return false;
	}
	if(pwd2.value==''){
		pwd2.focus();
		return false;
	}
	if(pwd.value != pwd2.value)
	{
		alert('两次密码不一致');
		pwd.value = '';
		pwd2.value = '';
		pwd.focus();
		return false;
	}
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该账户吗？')) return false;
	location = url;
}
</script><?php }} ?>