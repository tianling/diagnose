<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 17:15:34
         compiled from "D:\projects\www\admin\admin\view\office\edit.office.html" */ ?>
<?php /*%%SmartyHeaderCode:639650c305240b1dc7-97558432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9154752d83aa6653312f672876c3a6f5d5cdfdb' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\office\\edit.office.html',
      1 => 1354958131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '639650c305240b1dc7-97558432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c305242af5c9_49291775',
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c305242af5c9_49291775')) {function content_50c305242af5c9_49291775($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>科室管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1">科室管理</a></li>
          <li><a href="#tab2" class="default-tab">科室修改</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>科室</th>
				<th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="2">
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['office_name'];?>
</td>
				<td>
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['office_id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['office_id'];?>
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
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['office_id'];?>
"/>
			<fieldset>
            <p>
              科 室 <input value="<?php echo $_smarty_tpl->tpl_vars['result']->value['office_name'];?>
" class="text-input small-input" type="text" id="small-input" name="name" />
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
	if(real_name.value==''){
		real_name.focus();
		return false;
	}
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该科室吗？')) return false;
	location = url;
}
</script><?php }} ?>