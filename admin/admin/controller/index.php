<?php
class index extends Controller
{
	public function indexAction()
	{
		$this->jump(Url("index","index","index"));
	}
}
?>