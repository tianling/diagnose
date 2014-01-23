<?php
class registerModel extends Model
{
	public $table = "user";
	public $prefix = "user_";
	public $linker = array(
		array(
			'map' => "office",
			'mapkey' => "user_office_id", 
			'fdb' => "office",
			'fkey' => "office_id"
		),
		array(
			'map' => "doctor",
			'mapkey' => "user_doctor", 
			'fdb' => "doctors",
			'fkey' => "doctor_id"
		)
	);
}
?>