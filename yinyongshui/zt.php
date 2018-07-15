<?php

session_start();



include_once 'conn.php';

	 
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$id=$_POST['id'];
	$zt=$_POST['zt'];
	$pwdy=$_POST['ymm'];
	//$cx=$_POST['cx'];
	
	
					$sql="update xiaoshoudan set zt='".$zt."' where id=".$id;
					//echo $sql;
					$query=mysql_query($sql);
					echo "<script language='javascript'>alert('操作成功！');location.href='xiaoshoudan_list3.php';</script>";
					
	 }
	 
	 

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改密码</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="zt.php">
  <table width="41%" height="126" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="9DC9FF" style="border-collapse:collapse">
    <tr>
      <td colspan="2"><div align="center">设置订单状态</div></td>
    </tr>
    <tr>
      <td>订单状态：</td>
      <td><select name="zt" id="zt">
          <option value="待发货">待发货</option>
          <option value="配送中">配送中</option>
          <option value="配送失败">配送失败</option>
          <option value="配送成功">配送成功</option>
        </select>
          <input name="addnew" type="hidden" id="addnew" value="1"><input name="id" type="hidden" id="id" value="<?php echo $_GET["id"];?>"></td>
    </tr>
	<script language="javascript">document.form1.zt.value="<?php echo $_GET["zt"]?>";</script>
    <tr>
      <td><div align="right">
          <input type="submit" name="Submit" value="确定" onClick="return check()" />
      </div></td>
      <td><input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>

