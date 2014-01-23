<?php
class noticeModel extends Model
{
	public $table = "notice";
	public $create_auto_add = array(
		'time' => "time",
		'user' => "get_user_name"
	);
}
?>