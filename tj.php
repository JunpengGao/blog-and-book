<?php
//��֤login��Ϣ

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	
	$sql="update yuanchuangshipu set istop='��' where id=$id";
	
	 	mysql_query($sql);
	$sql="update yuanchuangshipu set istop='��' where id<>$id";
	
	 	mysql_query($sql);

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	
//}
?>