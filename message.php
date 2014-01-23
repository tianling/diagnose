<?php
	session_start();
	require_once("config.php");
	require_once("smarty.inc.php");

	$sql_doctor_get="SELECT * FROM `doctors`  WHERE `doctor_office_id`='".$_SESSION['id']."'";
	$query_doctor_get=mysql_query($sql_doctor_get);
	while($array_doctor_get=mysql_fetch_array($query_doctor_get)){
		if($array_doctor_get['doctor_job']==0)
			$array_doctor_get['doctor_job']="主任";
		if($array_doctor_get['doctor_job']==1)
			$array_doctor_get['doctor_job']="副主任";
		if($array_doctor_get['doctor_job']==2)
			$array_doctor_get['doctor_job']="医师";
		
		$doctors[]=$array_doctor_get;

	}


	$smarty->assign("doctors",$doctors);

	if(isset($_POST)&&$_POST!=NULL){
		if($_POST['sex']=='M'){
			$sex=1;
		}else{
			$sex=0;
		}
		$sql_regiser="INSERT INTO `user`(`user_name`,`user_age`,`user_sex`,`user_doctor`,`user_tel`,`user_address`,`user_message`,`user_addtime`,`user_office_id`) VALUES ('".$_POST['name']."','".$_POST['age']."','".$sex."','".$_POST['doctor']."','".$_POST['telephone']."','".$_POST['address']."','".$_POST['history']."','".date('Y-m-d H:i:s')."','".$_SESSION['id']."')";
		$query_register=mysql_query($sql_regiser);
		$sql_id_get=mysql_insert_id();
		if($query_register){
			echo "<script language=\"javascript\">alert('提交成功，请两小时后进入本系统查看审核情况！')</script>";
			$_SESSION['id']=$sql_id_get;
			echo "<script>location.href='list.php'</script>";
		}
	}
	$smarty->display("message.html");
?>