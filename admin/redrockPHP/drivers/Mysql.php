<?php 
class Mysql
{
 	private $link;				//连接 
	public $result;				//数据库结果集
	private $showError = false;	//sql报错开关
	
	public function __construct()
	{
		$dbConfig = $GLOBALS['_CFG']['db'];
		$dbHost = $dbConfig['host'];
		$dbUser = $dbConfig['user'];
		$dbPwd = $dbConfig['pwd'];
		$dbName = $dbConfig['name'];
		$dbHandle = $dbConfig['handle'];
		$this->link = mysql_connect($dbHost,$dbUser,$dbPwd) or $this->halt();
		mysql_select_db($dbName) or $this->halt();
		mysql_query("SET NAMES '".$dbHandle."'") or $this->halt();
	}
	
	public function __destruct()
	{
		mysql_close($this->link);
	}

	public function affected_rows(){return $this->affectedRows();}
	public function affectedRows()
	{
		return mysql_affected_rows();
	}
	
	public function insert_id(){return $this->insertId();}
	public function insertId()
	{
		return mysql_insert_id();
	}
	
	public function num_rows($result = null){return $this->numRows($result);}
	public function numRows($result = null)
	{
		if(empty($result)) $result = $this->result;
		return mysql_num_rows($result);
	}
	
	public function free_result($result = null){$this->free($result);}
	public function free($result = null)
	{
		if(empty($result)) $result = $this->result;
		return mysql_free_result($result);
	}

	//public function query($sql){return $this->Query($sql);}
	public function Query($sql)
	{
		if($query = mysql_query($sql))
		{
			return $this->result = $query;
		}
		else
		{
			$this->halt("SQL执行失败");
		}
	}
	
	public function fetch_array($result = null, $result_type = MYSQL_ASSOC){$this->fetchArray($result, $result_type);}
	public function fetchArray($result = null, $result_type = MYSQL_ASSOC)
	{
		if(empty($result)) $result = $this->result;
		return mysql_fetch_array($result, $result_type);
	}
	
	public function fetch_object($reuslt = null){$this->fetchObject($reuslt);}
	public function fetchObject($reuslt = null)
	{
		if(empty($result)) $result = $this->result;
		return mysql_fetch_object($reuslt);
	}
	
	public function get_array($reuslt = null, $result_type = MYSQL_ASSOC){$this->getArray($reuslt, $result_type);}
	public function getArray($reuslt = null, $result_typ = MYSQL_ASSOC)
	{
		if(empty($result)) $result = $this->result;
		$return = array();
		while($return[] = $this->fetchArray($result,$result_typ));
		$this->free($result);
		array_pop($return);
		return $return;
	}

	public function getTable($tbl_name)
	{
		$result = $this->getArray($this->Query("DESCRIBE ".$tbl_name));
		$pk = null;
		foreach($result as $val)
		{
			if($val['Key'] && $val['Extra'] == "auto_increment")
			{
				$pk = $val['Field'];
			}
		}
		return $pk;
	}
	
	private function halt($message = "")
	{
		if(function_exists("Error"))
		{
			Error($message." : ".mysql_error(),mysql_errno());
		}
		else
		{
			if($show_error)
			{
				die("Mysql Error :<br /> Code:".mysql_errno()."<br />Message:".mysql_error()."<br />".$message);
			}
		}
	}
}
?>
