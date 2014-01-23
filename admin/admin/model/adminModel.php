<?php
class adminModel extends Model
{
	public $table = "admin";
	public $prefix = "admin_";
	public $linker = array(
		array(
			'map' => "role",
			'mapkey' => "admin_role",
			'fdb' => "role",
			'fkey' => "role_id"
		),
	);
	public $create_auto_add = array(
		'login_time' => "time",
		'login_ip' => "ip",
	);
}
?>