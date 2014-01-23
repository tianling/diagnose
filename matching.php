<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smart i-matching</title>
<link rel="stylesheet" type="text/css" href="css/cureJudget.css" />
</head>
</html>
<?php
	session_start();
	require_once("config.php");
	
	if(isset($_POST)&&$_POST!=NULL){
		$sym=array_keys($_POST);
		$result=count($sym);
		/************************************************判断提交内容是否合法************************************************/
		if($result<5){
			echo "<script language=\"javascript\">alert('所选项不得少于5个，请返回重新选择!')</script>";
			echo "<script>location.href='index.php'</script>";
			exit();
		}
		/***********************************************循环查询用户提交信息*************************************************/
		for($i=0;$i<=$result-1;$i++){
			$sql_check="SELECT `lm_office_id` FROM `lm_office_symptom` WHERE `lm_symptom_id`='".$sym[$i]."'";
			$query_check=mysql_query($sql_check);
			while($array_check=mysql_fetch_array($query_check)){
				$dom=$array_check;
				//print_r($dom);
				$sql_office_matching="SELECT * FROM `office` WHERE `office_id`='".$dom['lm_office_id']."'";
				$query_office_matching=mysql_query($sql_office_matching);
				while($array_office_matching=mysql_fetch_array($query_office_matching))
				//每匹配成功一次，office_matching字段自动+1
				$sql_office_get="UPDATE `office`  SET `office_matching`=".$array_office_matching['office_matching']."+1 WHERE `office_id`= '".$array_office_matching['office_id']."'";
				mysql_query($sql_office_get);
			}

		}
		$result_max="SELECT * FROM `office` ORDER BY `office_matching` DESC LIMIT 0,1";//获取office_matching字段最大值对应记录
		$query_result_max=mysql_query($result_max);
		$array_result_max=mysql_fetch_array($query_result_max);
		if($array_result_max){
			$_SESSION['name']=$array_result_max['office_name'];
			$_SESSION['id']=$array_result_max['office_id'];

		}
		//die()；
		//输出分诊建议
		echo "<script type='text/javascript'>var r=confirm('您好，建议您去".$array_result_max['office_name']."挂号!');if (r==true){location.href='message.php';}else{location.href='index.php';}</script>";
		$result_clear="UPDATE `office` SET `office_matching`=0";
		mysql_query($result_clear);
		
	}else{
			echo "<script language=\"javascript\">alert('所选项不得少于5个，请返回重新选择!')</script>";
			echo "<script>location.href='index.php'</script>";
			exit();
	}

?>

