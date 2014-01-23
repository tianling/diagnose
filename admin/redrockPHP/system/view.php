<?php
/*
 * View :视图类
 * author：djh
 */
 
class View extends Smarty
{
	public function __construct()
	{
		Smarty::__construct();
		$allow = array(
			"left_delimiter","right_delimiter","debugging","caching","cache_lifetime",
			"compile_dir","template_dir","config_dir","cache_dir"
		);
		foreach($GLOBALS['_CFG']['smarty'] as $key => $value)
		{
			if(in_array($key,$allow)) $this->$key = $value;
		}
		foreach($GLOBALS['_CFG']['path'] as $key => $value)
		{
			if(in_array($key,$allow)) $this->$key = $value;
		}
	}
}
?>