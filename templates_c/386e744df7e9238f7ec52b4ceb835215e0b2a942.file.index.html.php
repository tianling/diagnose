<?php /* Smarty version Smarty-3.0.7, created on 2013-05-13 21:26:47
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:88049230251915a978509c2-95926688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386e744df7e9238f7ec52b4ceb835215e0b2a942' => 
    array (
      0 => './templates/index.html',
      1 => 1355150526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88049230251915a978509c2-95926688',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smart i-matching</title>
<link rel="stylesheet" type="text/css" href="css/cureJudget.css" />
</head>


<body>
<form action="search.php" method="post" name="search" onlick="get_id">
    <input type="text" name="user_id" value="请输入您的挂号单号"/>
    <input type="submit"  value="查询挂号单"/>
</form>
<form action="matching.php" method="post" name="symp_get" onclick="get_office()">
    <div id="Wrap">
    	<div id="contain">
         <div id="page">
            <div class="choose">
            	<p>Matching</p>
				<?php  $_smarty_tpl->tpl_vars['sym'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('symp_1st')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sym']->key => $_smarty_tpl->tpl_vars['sym']->value){
?>
                <div class="cure">
                    	<input type="checkbox"  name="<?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_id'];?>
" class="hiden">
                	<p class="sure"><?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_name'];?>
</p>
                </div>
				<?php }} ?>
            </div>
            <div class="choose">
            	<p>Matching</p>
                <?php  $_smarty_tpl->tpl_vars['sym'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('symp_2nd')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sym']->key => $_smarty_tpl->tpl_vars['sym']->value){
?>
                <div class="Pagecure">
                    	<input type="checkbox"  name="<?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_id'];?>
" class="hidens">
                	<p class="sure"><?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_name'];?>
</p>
                </div> 
                <?php }} ?> 
            </div>
            <div class="choose">
            	<p>Matching</p>
                <?php  $_smarty_tpl->tpl_vars['sym'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('symp_3rd')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sym']->key => $_smarty_tpl->tpl_vars['sym']->value){
?>
                <div class="Pagecure">
                    	<input type="checkbox"  name="<?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_id'];?>
" class="hidens">
                	<p class="sure"><?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_name'];?>
</p>
                </div>
                <?php }} ?>
            </div>

            <div class="choose">
            	<p>Matching</p>
                <?php  $_smarty_tpl->tpl_vars['sym'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('symp_4th')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sym']->key => $_smarty_tpl->tpl_vars['sym']->value){
?>
                <div class="Pagecure">
                    	<input type="checkbox"  name="<?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_id'];?>
" class="hidens">
                	<p class="sure"><?php echo $_smarty_tpl->tpl_vars['sym']->value['symptom_name'];?>
</p>
                </div>
                <?php }} ?>
            </div>
		 </div>		
                        <a href="#" id="nextpage"><img src="images/next.png" /></a>
                        <a href="#" id="beforepage"><img src="images/before.png" /></a>
        </div>
    </div>
            	<input type="submit" id="submit" value=" "/>
</form>    
    
    
<script type="text/javascript" language="javascript" src="javascript/demojs.js"></script>
<script type="text/javascript" language="javascript" src="javascript/myQuery.js"></script>
</body>
</html>
