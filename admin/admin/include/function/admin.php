<?php
function acl_check(&$object)
{
	if(!isset($_SESSION['admin_id']) || !isset($_SESSION['role_id']))
	{
		$object->jump(Url("index","login"));
	}
}
function shortcut(&$object)
{
	$object->shortcut =  M("menu")->findAll(array('shortcut'=>1));
}
function notice(&$object)
{
	$object->notice = M("notice")->findAll(array('lock'=>"0"),"`time` DESC",null,"0,2");
}
?>