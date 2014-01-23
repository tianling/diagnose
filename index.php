<?php
	require_once("config.php");
	require_once("smarty.inc.php");

	/************第一页数据取出***********************************************/
	$sql_symp_1st="SELECT * FROM `symptom` ORDER BY `symptom_id`  LIMIT 0,16 ";
	$query_symp_1st=mysql_query($sql_symp_1st);
	while($array_symp_1st=mysql_fetch_array($query_symp_1st)){
		$symp_1st[]=$array_symp_1st;
		
	}

	$smarty->assign("symp_1st",$symp_1st);//smarty注册到前台

	/************第二页数据取出**********************************************/
	$sql_symp_2nd="SELECT * FROM `symptom` ORDER BY `symptom_id` LIMIT 16,16";
	$query_symp_2nd=mysql_query($sql_symp_2nd);
	while($array_symp_2nd=mysql_fetch_array($query_symp_2nd)){
		$symp_2nd[]=$array_symp_2nd;
		
	}
	

	$smarty->assign("symp_2nd",$symp_2nd);

	/************第三页数据取出**********************************************/
	$sql_symp_3rd="SELECT * FROM `symptom` ORDER BY `symptom_id` LIMIT 32,16";
	$query_symp_3rd=mysql_query($sql_symp_3rd);
	while($array_symp_3rd=mysql_fetch_array($query_symp_3rd)){
		$symp_3rd[]=$array_symp_3rd;
		
	}
	$smarty->assign("symp_3rd",$symp_3rd);

	/************第四页数据取出**********************************************/
	$sql_symp_4th="SELECT * FROM `symptom` ORDER BY `symptom_id` LIMIT 48,16";
	$query_symp_4th=mysql_query($sql_symp_4th);
	while($array_symp_4th=mysql_fetch_array($query_symp_4th)){
		$symp_4th[]=$array_symp_4th;
		
	}
	$smarty->assign("symp_4th",$symp_4th);


	
	//$smarty->assign("symptom_others",$symptom_others);
	$smarty->display("index.html");

?>