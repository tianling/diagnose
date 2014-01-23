<?php
class doctorModel extends Model
{
	public $table = "doctors";
	public $prefix = "doctor_";
	public $linker = array(
		array(
			'map' => "office",
			'mapkey' => "doctor_office_id", 
			'fdb' => "office",
			'fkey' => "office_id"
		)
	);
}
?>