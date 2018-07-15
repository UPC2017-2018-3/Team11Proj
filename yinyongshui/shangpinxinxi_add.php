<?php
error_reporting(0);
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$shangpinbianhao=$_POST["shangpinbianhao"];$shangpinmingcheng=$_POST["shangpinmingcheng"];$guige=$_POST["guige"];$chandi=$_POST["chandi"];$baozhiqi=$_POST["baozhiqi"];$beizhu=$_POST["beizhu"];
	$sql="insert into shangpinxinxi(shangpinbianhao,shangpinmingcheng,guige,chandi,baozhiqi,beizhu) values('$shangpinbianhao','$shangpinmingcheng','$guige','$chandi','$baozhiqi','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='shangpinxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>商品信息</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>添加商品信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.shangpinbianhao.value==""){alert("请输入商品编号");document.form1.shangpinbianhao.focus();return false;}if(document.form1.shangpinmingcheng.value==""){alert("请输入商品名称");document.form1.shangpinmingcheng.focus();return false;}if(document.form1.baozhiqi.value==""){alert("请输入保质期");document.form1.baozhiqi.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>商品编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='' />&nbsp;*</td></tr><tr><td>商品名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' size='50'  />&nbsp;*</td></tr><tr><td>规格：</td><td><input name='guige' type='text' id='guige' value='' size='50'  /></td></tr><tr><td>产地：</td><td><input name='chandi' type='text' id='chandi' value='' /></td></tr><tr><td>保质期：</td><td><input name='baozhiqi' type='text' id='baozhiqi' value='' />&nbsp;*</td></tr><tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'></textarea></td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

