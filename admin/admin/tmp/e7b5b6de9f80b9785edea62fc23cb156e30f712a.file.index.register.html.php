<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 17:18:01
         compiled from "D:\projects\www\admin\admin\view\register\index.register.html" */ ?>
<?php /*%%SmartyHeaderCode:2061050c2feb7dac365-41274102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b5b6de9f80b9785edea62fc23cb156e30f712a' => 
    array (
      0 => 'D:\\projects\\www\\admin\\admin\\view\\register\\index.register.html',
      1 => 1354958278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2061050c2feb7dac365-41274102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c2feb809d141_91996325',
  'variables' => 
  array (
    'page' => 0,
    'list' => 0,
    'i' => 0,
    'ROOT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c2feb809d141_91996325')) {function content_50c2feb809d141_91996325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                <th>备注</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['i']->value['user_sex']==1){?>男<?php }else{ ?>女<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_tel'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_adress'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_message'];?>
</td>
                <td>
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