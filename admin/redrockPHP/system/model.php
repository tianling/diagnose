<?php
/*
 * Model :数据模型类
 * author：djh
 */
 
abstract class Model
{
	private $db = null;
	private $pk = null;
	private $pre = "";
	private $link = "";
	
	public function __construct()
	{
		if(!$this->table) Error("数据表名未被定义");
		$this->db = loadSysClass("mysql","drivers",true);
		$this->pk = $this->db->getTable($this->table);
		$this->pre = isset($this->prefix) ? $this->prefix : "";
		$this->pk = str_replace($this->pre,"",$this->pk);
		if(!$this->pk) Error("数据表未定义自动递增主键");
	}

	public function Query($sql)
	{
		return $this->db->Query($sql);
	}
	
	public function getArray($result)
	{
		return rs_decode($this->db->getArray($result));
	}
	
	public function fetchArray($result)
	{
		return rs_decode($this->db->fetchArray($result));
	}
	
	public function num_rows($result)
	{
		return $this->db->num_rows($result);
	}
	
	public function affected_rows()
	{
		return $this->db->affected_rows();
	}
	
	private function auto_add($conditions,$auto_add)
	{
		$arr = $conditions;
		if($GLOBALS['_CFG']['auto']['auto_form_add'])
		{
			$auto_add .= "_auto_add";
			if(isset($this->$auto_add) && !empty($this->$auto_add))
			{
				foreach($this->$auto_add as &$val)
				{
					if(function_exists($val)) $val = $val();
				}
				$arr = array_merge($conditions,$this->$auto_add);
			}
		}
		return html_encode(sql_encode($arr));
	}
	
	public function select($conditions = array())
	{
		if(isset($this->linker) && is_array($this->linker))
		{
			$dbs = array();
			$cons = array();
			foreach($this->linker as $val)
			{
				if(is_array($val))
				{
					if(!empty($conditions) && !in_array($val['map'],$conditions)) continue;
					$dbs[] = "`".$val['fdb']."`";
					$cons[] = "`".$val['mapkey']."`=`".$val['fkey']."`";
				}
			}
			$dbs = "(".join(",",$dbs).")";
			$cons = "(".join(" AND ",$cons).")";
			$this->link = "LEFT JOIN {$dbs} ON {$cons}";
		}
		return $this;
	}
	
	public function find($conditions = null,$sort = null,$fields = null)
	{
		if($result = $this->findAll($conditions,$sort,$fields,1))
		{
			return array_pop($result);
		}
		return false;
	}
	
	public function findBy($field,$value)
	{
		return $this->find(array($field => $value));
	}
	
	public function findByPk($value)
	{
		return $this->findBy($this->pk,$value);
	}
	
	public function findCount($conditions = null)
	{
		return $this->findMethod("COUNT",$conditions);
	}
	
	public function findMethod($method,$conditions = null,$field = null)
	{
		if($field == null) $field = $this->pk;
		if(empty($field)) return false;
		$result = $this->find($conditions,null,$method."(`".$this->pre.$field."`) AS `rs`");
		return $result['rs'];
	}
	
	public function findAll($conditions = null,$sort = null,$fields = null,$limit = null)
	{
		$field = empty($fields) ? "*" : $fields;
		$sort = empty($sort) ? "ORDER BY ".$this->pre.$this->pk : "ORDER BY ".$sort;
		$limit = !empty($limit) ? "LIMIT ".$limit : "";
		$where = "";
		if(is_array($conditions))
		{
			$conditions = $this->auto_add($conditions,"find");
			$join = array();
			foreach($conditions as $k=>$i)
			{
				$join[] = "`".$this->pre.$k."`='".$i."'";
			}
			$where = "WHERE ".join(" AND ",$join);
		}
		else
		{
			if($conditions != null) $where = "WHERE ".$conditions;
		}
		if(is_array($fields))
		{
			$join = array();
			foreach($fields as $i)
			{
				$join[] = "`".$this->pre.$i."` AS `".$i."`";
			}
			$field = join(",",$join);
		}
		$sql = "SELECT {$field} FROM `{$this->table}` {$this->link} {$where} {$sort} {$limit}";
		return $this->getArray($this->Query($sql));
	}
	
	public function updateField($conditions,$field,$value)
	{
		return $this->update($conditions,array($field => $value));
	}
	
	public function updateBy($field,$value,$fields)
	{
		return $this->update(array($field => $value),$fields);
	}
	
	public function updateByPk($value,$fields)
	{
		return $this->updateBy($this->pk,$value,$fields);
	}
	
	public function updateAuto($method = "POST")
	{
		$method = "_".$method;
		if(!isset($GLOBALS[$method][$this->pk])) return false;
		$value = $GLOBALS[$method][$this->pk];
		unset($GLOBALS[$method][$this->pk]);
		return $this->updateByPk($value,$GLOBALS[$method]);
	}
	
	public function optField($conditions,$field,$optval = 1)
	{
		if(!is_numeric($optval)) return false;
		if($optval>=0) $optval = "+".$optval;
		$fields = "`".$this->pre.$field."`=`".$this->pre.$field."`".$optval;
		return $this->update($conditions,$fields);
	}
	
	public function optFieldBy($field,$value,$opt_field,$optval = 1)
	{
		return $this->optField(array($field => $value),$opt_field,$optval);
	}
	
	public function optFieldByPk($value,$field,$optval = 1)
	{
		return $this->optFieldBy($this->pk,$value,$field,$optval);
	}
	
	public function update($conditions,$fields)
	{
		$set = "";
		if(is_array($fields))
		{
			$fields = $this->auto_add($fields,"update");
			$join = array();
			foreach($fields as $k => $i)
			{
				$join[] = "`".$this->pre.$k."`='".$i."'";
			}
			$set = join(", ",$join);
		}
		else
		{
			if(empty($fields)) return false;
			$set = $fields;
		}
		$where = "";
		if(is_array($conditions))
		{
			$conditions = html_encode(sql_encode($conditions));
			$join = array();
			foreach($conditions as $k=>$i)
			{
				$join[] = "`".$this->pre.$k."`='".$i."'";
			}
			$where = "WHERE ".join(" AND ",$join);
		}
		else
		{
			if($conditions != null) $where = "WHERE ".$conditions;
		}
		$sql = "UPDATE `{$this->table}` SET {$set} {$where}";
		return $this->Query($sql);
	}
	
	public function createAll($rows)
	{
		if(!is_array($rows)) return false;
		foreach($rows as $row) $this->create($row);
	}
	
	public function createAuto($method = "POST")
	{
		$method = "_".$method;
		return $this->create($GLOBALS[$method]);
	}
	
	public function create($row)
	{
		if(empty($row)) return false;
		if(!is_array($row)) return false;
		$row = $this->auto_add($row,"create");
		$keys = array();
		$vals = array();
		foreach($row as $k => $i)
		{
			$keys[] = "`".$this->pre.$k."`";
			$vals[] = "'".$i."'";
		}	
		$field = join(",",$keys);
		$value = join(",",$vals);
		$sql = "INSERT INTO `{$this->table}`({$field}) VALUES ({$value})";
		if($this->Query($sql))
		{
			if($insert_id = $this->db->insert_id())
			{
				return $insert_id;
			}
			else
			{
				return $this->findAll($row);
			}
		}
		return false;
	}
	
	public function deleteBy($field,$value)
	{
		return $this->delete(array($field => $value));
	}
	
	public function deleteByPk($value)
	{
		return $this->deleteBy($this->pk,$value);
	}
	
	public function delete($conditions)
	{
		if(empty($conditions)) return false;
		$where = "";
		if(is_array($conditions))
		{
			$conditions = $this->auto_add($conditions,"delete");
			$join = array();
			foreach($conditions as $k => $i)
			{
				$join[] = "`".$this->pre.$k."`='".$i."'";
			}
			$where = "WHERE ".join(" AND ",$join);
		}
		else
		{
			if($conditions != null) $where = "WHERE ".$conditions;
		}
		$sql = "DELETE FROM `{$this->table}` {$where}";
		return $this->Query($sql);
	}
}
?>