<?php /* Smarty version Smarty-3.0.7, created on 2013-05-13 21:27:10
         compiled from "./templates/message.html" */ ?>
<?php /*%%SmartyHeaderCode:65763803551915aae063d55-57845251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a5d20cccf7efb528bfdd803f8d297671e05059' => 
    array (
      0 => './templates/message.html',
      1 => 1359120443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65763803551915aae063d55-57845251',
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
<link rel="stylesheet" type="text/css" href="css/cureJudget_m.css" />
</head>

<body>
<form action="message.php" method="post" name="message" onsubmit="return check();">
    <div id="Wrap">
    	<div id="contain">
            <div class="choose">
            	<p>挂号单</p>
                <div id="information">
                	<p>姓名:</p><input type="text" class="styletext" name="name" />
                    <p>年龄:</p><input type="text" class="styletext" name="age"/>
                    <p>性别:</p>
                    <select name="sex">
                    	<option value="M">男</option>
                        <option value="WM">女</option>
                    </select>
                    <p>医生选择:</p>                 
                    <select name="doctor">
                        <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('doctors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['doc']->value['doctor_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['doc']->value['doctor_name'];?>
(<?php echo $_smarty_tpl->tpl_vars['doc']->value['doctor_job'];?>
)</option>
                        <?php }} ?>
                    </select>
                    <br />
                    <p>地址:</p><input type="text" class="styletextS" name="address" />
                    <br/>
                    <p>电话:</p><input type="text" class="styletextS"  name="telephone"/>
                    <br/>
                    <p>过往病史:</p><input type="text" class="styletextS" name="history" />
                </div>
            </div>	
    </div>
            	<input type="submit" id="submit" value=" "/>
</form>    
    
    
<script type="text/javascript" language="javascript" src="javascript/demojs_m.js"></script>
<script type="text/javascript" language="javascript" src="javascript/myQuery_m.js"></script>
</body>
</html>
