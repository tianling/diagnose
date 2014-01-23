<?php /* Smarty version Smarty-3.1.11, created on 2012-12-19 16:29:25
         compiled from "D:\sever\Apache\htdocs\diagnose\admin\admin\view\doctor\index.doctor.html" */ ?>
<?php /*%%SmartyHeaderCode:2133150c3145c3729e3-07939698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cccc560c8000de342c16ff40c6367e69ed2f487' => 
    array (
      0 => 'D:\\sever\\Apache\\htdocs\\diagnose\\admin\\admin\\view\\doctor\\index.doctor.html',
      1 => 1355905741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2133150c3145c3729e3-07939698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c3145c4a9cd7_46314641',
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
    'office' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3145c4a9cd7_46314641')) {function content_50c3145c4a9cd7_46314641($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>医生管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">医生管理</a></li>
          <li><a href="#tab2">医生添加</a></li>
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
                <th>科室</th>
				<th>职位</th>
				<th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="3">
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['doctor_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['office_name'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['i']->value['doctor_job']==0){?>主任<?php }elseif($_smarty_tpl->tpl_vars['i']->value['doctor_job']==1){?>副主任<?php }else{ ?>医师<?php }?></td>
				<td>
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['doctor_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['doctor_id'];?>
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
              医 生 <input class="text-input small-input" type="text" id="small-input" name="name" />
			</p>
            <p>
              科 室 
              <select name="office_id" class="small-input">
				<?php if (isset($_smarty_tpl->tpl_vars['office']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['office']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['office_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['office_name'];?>
</option>
				<?php } ?>
				<?php }?>
              </select>
            </p>
            <p>
              职 位 
              <select name="job" class="small-input">
                <option value="0">主任</option>
				<option value="1">副主任</option>
				<option value="2">医师</option>
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
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该医生吗？')) return false;
	location = url;
}
</script><?php }} ?>