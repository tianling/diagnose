<?php /* Smarty version Smarty-3.1.11, created on 2012-12-08 18:19:58
         compiled from "D:\sever\Apache\htdocs\diagnose\admin\admin\view\announce\index.announce.html" */ ?>
<?php /*%%SmartyHeaderCode:1057750c3144e283a10-89078778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b3e99be8078703b0336ca67997440d2b94c787' => 
    array (
      0 => 'D:\\sever\\Apache\\htdocs\\diagnose\\admin\\admin\\view\\announce\\index.announce.html',
      1 => 1353583539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057750c3144e283a10-89078778',
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
  'unifunc' => 'content_50c3144e424ea6_17590790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3144e424ea6_17590790')) {function content_50c3144e424ea6_17590790($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <div class="content-box-header">
        <h3>公告管理</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">公告管理</a></li>
          <li><a href="#tab2">公告添加</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
<?php echo $_smarty_tpl->getSubTemplate ("../public/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <table>
            <thead>
              <tr>
                <th>公告ID</th>
                <th>公告标题</th>
                <th>部分内容</th>
				<th>发布时间</th>
				<th>发布人</th>
				<th>状态</th>
				<th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="7">
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</td>
                <td><?php echo cut(html_decode($_smarty_tpl->tpl_vars['i']->value['message']),20);?>
</td>
                <td><?php echo datetime($_smarty_tpl->tpl_vars['i']->value['time']);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['i']->value['lock']==1){?>隐藏<?php }else{ ?>显示<?php }?></td>
                <td>
				  <a href="<?php echo Url('lock');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['i']->value['lock']==1){?>显示<?php }else{ ?>隐藏<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/hammer_screwdriver.png" alt="<?php if ($_smarty_tpl->tpl_vars['i']->value['lock']==1){?>显示<?php }else{ ?>隐藏<?php }?>" /></a>
                  <a href="<?php echo Url('edit');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" title="编辑"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
static/images/icons/pencil.png" alt="编辑" /></a>
				  <a href="javascript:cf('<?php echo Url('delete');?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
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
              公告标题 <input class="text-input medium-input" type="text" id="small-input" name="title" />
			</p>
            <p>
              公告内容 
			  <textarea class="text-input textarea wysiwyg" id="textarea" name="message" cols="79" rows="15"></textarea>
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
	if(title.value==''){
		title.focus();
		return false;
	}
	return true;
}
}

function cf(url)
{
	if(!confirm('确定要删除该公告吗？')) return false;
	location = url;
}
</script><?php }} ?>