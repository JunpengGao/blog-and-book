<?php

session_start();



include_once 'conn.php';

	 
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['xmm1'];
	$pwdy=$_POST['ymm'];
	//$cx=$_POST['cx'];
	
	$sql="select * from allusers where username='".$_SESSION['username']."'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					if(mysql_result($query,0,"pwd")==$pwdy)
					{
					$sql="update allusers set pwd='$pwd' where username='".$_SESSION['username']."'";
					$query=mysql_query($sql);
					echo "<script language='javascript'>alert('successful��');history.back();</script>";
					}
					else
					{
					echo "<script language='javascript'>alert('sorry ,orginal password are not correct��');history.back();</script>";
					}
			}
			else
			{
		
					echo "<script language='javascript'>alert('sorry ,orginal password are not correct��');history.back();</script>";
			}
	 }
	 
	 

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸�password</title>
</head>
<script>
function check()
{
	if(document.form1.ymm.value=="")
	{
		alert("please input orginal password");
		document.form1.ymm.focus();
		return false;
	}
	if(document.form1.xmm1.value=="")
	{
		alert("please enter new password");
		document.form1.xmm1.focus();
		return false;
	}
	if(document.form1.xmm2.value=="")
	{
		alert("Please make sure your password");
		document.form1.xmm2.focus();
		return false;
	}
	if (document.form1.xmm1.value!=document.form1.xmm2.value)
	{
		alert("not same password");
		document.form1.xmm1.value="";
		document.form1.xmm2.value="";
		document.form1.xmm1.focus();
		return false;
	}
}

</script>
<body>

<form id="form1" name="form1" method="post" action="mod.php">
  <table width="41%" height="126" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="9DC9FF" style="border-collapse:collapse">
    <tr>
      <td colspan="2"><div align="center">modficidation password</div></td>
    </tr>
    <tr>
      <td>orginal password��</td>
      <td><input name="ymm" type="text" id="ymm" />
      <input name="addnew" type="hidden" id="addnew" value="1"></td>
    </tr>
    <tr>
      <td>new password��</td>
      <td><input name="xmm1" type="password" id="xmm1" /></td>
    </tr>
    <tr>
      <td>comfirm password��</td>
      <td><input name="xmm2" type="password" id="xmm2" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="confirm" onClick="return check()" /></td>
      <td><input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
</body>
</html>

