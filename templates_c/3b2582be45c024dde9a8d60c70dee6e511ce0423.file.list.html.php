<?php /* Smarty version Smarty-3.0.7, created on 2013-05-13 21:28:04
         compiled from "./templates/list.html" */ ?>
<?php /*%%SmartyHeaderCode:200641449851915ae4b087b3-62080486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2582be45c024dde9a8d60c70dee6e511ce0423' => 
    array (
      0 => './templates/list.html',
      1 => 1356770126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200641449851915ae4b087b3-62080486',
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

    <div id="Wrap">
    	<div id="contain">
            <div class="choose">
            	<p>挂号单</p>
                    <table border='1'  width='472' hight='356' >
                        <tr>
                            <td>姓名：<?php echo $_smarty_tpl->getVariable('name')->value;?>
</td>
                            <td>年龄：<?php echo $_smarty_tpl->getVariable('age')->value;?>
</td>
                        </tr>
                        <tr>
                            <td>性别: <?php echo $_smarty_tpl->getVariable('sex')->value;?>
</td>
                            <td>主治医生: <?php echo $_smarty_tpl->getVariable('doctor')->value;?>
</td>
                        </tr>
                        <tr>
                            <td>家庭地址: <?php echo $_smarty_tpl->getVariable('address')->value;?>
</td>
                        </tr>
                        <tr>
                            <td>联系电话: <?php echo $_smarty_tpl->getVariable('tel')->value;?>
</td>
                            <td>挂号时间: <?php echo $_smarty_tpl->getVariable('time')->value;?>
</td>
                        </tr>
                        <tr>
                            <td>病史： <?php echo $_smarty_tpl->getVariable('message')->value;?>
</td>
                        </tr>
                        <tr>
                            <td>状态： <b><?php echo $_smarty_tpl->getVariable('state')->value;?>
<b></td>
                        </tr>
                        <tr>
                            <td>单号:<b><?php echo $_smarty_tpl->getVariable('id')->value;?>
</b>(请记牢，过后凭此号查看挂号信息)</td>
                        </tr>
                    </table>
                    <br/>
                    <br/>
                    <?php if ($_smarty_tpl->getVariable('state_id')->value==1){?>
                    <p align="center" >您前面有: <b><?php echo $_smarty_tpl->getVariable('num')->value;?>
</b> 位病人</p>
                    <?php }?>
                </div>
            </div>	
    </div>
            	
   
    
    
<script type="text/javascript" language="javascript" src="javascript/demojs_m.js"></script>
<script type="text/javascript" language="javascript" src="javascript/myQuery_m.js"></script>
</body>
</html>