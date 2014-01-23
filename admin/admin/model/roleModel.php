<?php
class roleModel extends Model
{
	public $table = "role";
	public $prefix = "role_";
	public $linker = array(
		array(
			'map' => "acl",
			'mapkey' => "role_id",
			'fdb' => "role",
			'fkey' => "acl_role_id"
		)
	);
}
?>