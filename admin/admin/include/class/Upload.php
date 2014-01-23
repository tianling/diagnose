<?php
class Upload
{
	protected $content = "";
	protected $id = "";
	
	public function __construct($content,$id)
	{
		$this->content = $content;
		$this->id = $id;
	}
	
	public function upload_pic($db)
	{
		$this->upload("#<img.*src=\"(.+)\".*alt=\"(.*)\".*\/>#U",$db);
	}
	
	private function upload($format,$db)
	{
		preg_match_all($format,$this->content,$match);
		if(!empty($match))
		{
			foreach($match[1] as $val)
			{
				if(!file_exists($val) || !M($db)->updateByPk($this->id,array('pic_address'=>"admin/".$val)))
				{
					C("application")->message(3,$val."未能写入数据库");
				}
				break;
			}
		}
	}
}