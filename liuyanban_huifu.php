<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$huifu=$_POST["huifu"];
	$sql="update liuyanban set huifu='$huifu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('successful!');location.href='liuyanban_list.php';</script>";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>reply</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>

<body>
<p>reply�� date�� <?php echo $ndate; ?></p>
<?php
$sql="select * from liuyanban where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse"> 

      <tr>
        <td>reply��</td><td><textarea name='huifu' cols='50' rows='8' id='huifu'><?php echo mysql_result($query,$i,huifu);?></textarea></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="submit" />
      <input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

