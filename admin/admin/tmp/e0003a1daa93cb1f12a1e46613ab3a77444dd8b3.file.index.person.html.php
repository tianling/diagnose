<?php /* Smarty version Smarty-3.1.11, created on 2013-06-12 10:00:37
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/person/index.person.html" */ ?>
<?php /*%%SmartyHeaderCode:98578278751b846c5336e29-53629130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0003a1daa93cb1f12a1e46613ab3a77444dd8b3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/diagnose/admin/admin/view/person/index.person.html',
      1 => 1351852006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98578278751b846c5336e29-53629130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51b846c53e3066_65849785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b846c53e3066_65849785')) {function content_51b846c53e3066_65849785($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>个人信息管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">个人信息</a></li>
		  <li><a href="#tab2">修改信息</a></li>
		  <li><a href="#tab3">修改密码</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>账户名</th>
                <th>真实姓名</th>
				<th>角色</th>
				<th>邮箱</th>
				<th>剩余次数</th>
				<th>状态</th>
				<th>登录时间</th>
				<th>登录IP</th>
              </tr>
            </thead>
            <tbody>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['admin_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['admin_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['admin_real_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['role_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['admin_email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['admin_remain_times'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['list']->value['admin_lock']==1){?>锁定<?php }else{ ?>正常<?php }?></td>
				<td><?php echo datetime($_smarty_tpl->tpl_vars['list']->value['admin_login_time']);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['admin_login_ip'];?>
</td>
            </tbody>
          </table>
        </div>
        <div class="tab-content" id="tab2">
			<form action="<?php echo Url('edit');?>
" method="post" onsubmit="return check1(this)">
			<fieldset>
            <p>
              真实姓名 <input class="text-input small-input" type="text" id="small-input" name="real_name" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['admin_real_name'];?>
"/>
			</p>
            <p>
              &nbsp;&nbsp;邮 箱 &nbsp;&nbsp; <input class="text-input small-input" type="text" id="small-input" name="email" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['admin_email'];?>
"/>
			</p>
            <p>
              <input class="button" type="submit" value="修 改" />
            </p>
            </fieldset>
			</form>
            <div class="clear"></div>
        </div>
        <div class="tab-content" id="tab3">
			<form action="<?php echo Url('pwd');?>
" method="post" onsubmit="return check2(this)">
			<fieldset>
            <p>
               旧 密 码 &nbsp;&nbsp;<input class="text-input small-input" type="password" id="small-input" name="old_pwd" />
			</p>
            <p>
               新 密 码 &nbsp;&nbsp;<input class="text-input small-input" type="password" id="small-input" name="pwd" />
			</p>
            <p>
			  验证密码 <input class="text-input small-input" type="password" id="small-input" name="pwd2" />
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
function check1(thisform)
{with(thisform){
	if(real_name.value==''){
		real_name.focus();
		return false;
	}
	return true;
}
}

function check2(thisform)
{with(thisform){
	if(old_pwd.value==''){
		old_pwd.focus();
		return false;
	}
	if(pwd.value==''){
		pwd.focus();
		return false;
	}
	if(pwd2.value==''){
		pwd2.focus();
		return false;
	}
	if(pwd.value!=pwd2.value){
		alert('两次输入的新密码不一致');
		pwd.value='';
		pwd2.value='';
		pwd.focus();
		return false;
	}
	return true;
}
}
</script><?php }} ?>