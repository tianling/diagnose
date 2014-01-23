<?php
class aclModel extends Model
{
	public $table = "acl";
	public $prefix = "acl_";
	public $linker = array(
		array(
			'map' => "role",
			'mapkey' => "acl_role_id", 
			'fdb' => "role",
			'fkey' => "role_id"
		)
	);
}
?>