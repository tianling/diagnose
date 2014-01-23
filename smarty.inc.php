<?php
	include_once("smarty/Smarty.class.php");
	$smarty=new smarty();
	//$smarty->templates_dir("smarty/templates");
	//$smarty->compile_dir("smarty/templates_c");
	//$smarty->config_dir("./smarty/config_File.class.php");
	//$smarty->cache_dir("smarty/cache");
	//$smarty->cache_lifetime=0
	$smarty->caching=false;
	$smarty->debugging = false;
	//$smarty->left_delimiter=>"{#";
	//$smarty->right_delimiter=>"#}";
	

?>