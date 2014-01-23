<?php
	require_once("config.php");
	require_once("smarty.inc.php");

	if(isset($_POST['user_id'])&&$_POST['user_id']!=NULL){
		$sql_info="SELECT * FROM `user` WHERE `user_id`='".$_POST['user_id']."'";
		$query_info=mysql_query($sql_info);
		if(mysql_num_rows($query_info)==0){
			echo "<script language=\"javascript\">alert('您输入内容有误或者单号不存在!')</script>";
			echo "<script>location.href='index.php'</script>";
		}
		while($array_info=mysql_fetch_array($query_info)){
			$info[]=$array_info;
		}
		if($info[0]['user_sex']==1){
		$sex="男";
	}else{
		$sex="女";
	}
	$sql_doctor="SELECT * FROM `doctors` WHERE `doctor_id`='".$info[0]['user_doctor']."'";
	$query_doctor=mysql_query($sql_doctor);
	while($array_doctor=mysql_fetch_array($query_doctor)){
		$doctor[]=$array_doctor;
	}

	$sql_user_get="SELECT * FROM `user` WHERE `user_id`<'".$info[0]['user_id']."'";
	$query_user_get=mysql_query($sql_user_get);
	$user_num=mysql_num_rows($query_user_get);

	$sql_state_get="SELECT `user_lock` FROM `user` WHERE `user_id`='".$info[0]['user_id']."'";
	$query_state_get=mysql_query($sql_state_get);
	$array_state_get=mysql_fetch_array($query_state_get);
	if($array_state_get['user_lock']==0){
		$state="待审核";
	}else{
		$state="审核通过，挂号成功!";
	}
	
	$smarty->assign("id",$info[0]['user_id']);
	$smarty->assign("state_id",$array_state_get['user_lock']);
	$smarty->assign("state",$state);
	$smarty->assign("name",$info[0]["user_name"]);
	$smarty->assign("age",$info[0]["user_age"]);
	$smarty->assign("sex",$sex);
	$smarty->assign("doctor",$doctor[0]['doctor_name']);
	$smarty->assign("address",$info[0]["user_address"]);
	$smarty->assign("tel",$info[0]["user_tel"]);
	$smarty->assign("message",$info[0]["user_message"]);
	$smarty->assign("time",$info[0]["user_addtime"]);
	$smarty->assign("num",$user_num);

	$smarty->display("list.html");
	}
?>