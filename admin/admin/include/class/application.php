<?php
class application
{
	public function message($code,$message)
	{
		$type = "";
		switch($code)
		{
			case 0: $type = "error"; break;
			case 1: $type = "success"; break;
			case 2: $type = "information"; break;
			case 3: $type = "attention"; break;
			default: $type = "information";
		}
		$_SESSION['message'][] = array(
			'type' => $type,
			'content' => $message
		);
		$this->dialog($message,$_SESSION['name'],$code);
	}
	
	public function dialog($message,$user,$type)
	{
		$array = array(
			'user' => $user,
			'message' => $message,
			'type' => $type,
		);
		M("dialog")->create($array);
	}
}
?>