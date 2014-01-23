<?php
class dialogModel extends Model
{
	public $table = "dialog";
	
	public $create_auto_add = array(
		'time' => "time",
		'ip' => "ip",
		'controller' => "get_controller",
		'action' => "get_action",
	);
}
?>