<?php
error_reporting(0);
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
$shengshi=$_POST["shengshi"];
	$danjubianhao=$_POST["danjubianhao"];$goumaidanwei=$_POST["goumaidanwei"];$zhidanren=$_POST["zhidanren"];$jingshouren=$_POST["jingshouren"];$fahuocangku=$_POST["fahuocangku"];$shangpinbianhao=$_POST["shangpinbianhao"];$shangpinmingcheng=$_POST["shangpinmingcheng"];$guige=$_POST["guige"];$shengchanriqi=$_POST["shengchanriqi"];$danjia=$_POST["danjia"];$shuliang=$_POST["shuliang"];$jine=$_POST["jine"];$beizhu=$_POST["beizhu"];$fukuanzhanghu=$_POST["fukuanzhanghu"];$fukuanjine=$_POST["fukuanjine"];
	$sql="insert into xiaoshoudan(shengshi,danjubianhao,goumaidanwei,zhidanren,jingshouren,fahuocangku,shangpinbianhao,shangpinmingcheng,guige,shengchanriqi,danjia,shuliang,jine,beizhu,fukuanzhanghu,fukuanjine) values('$shengshi','$danjubianhao','$goumaidanwei','$zhidanren','$jingshouren','$fahuocangku','$shangpinbianhao','$shangpinmingcheng','$guige','$shengchanriqi','$danjia','$shuliang','$jine','$beizhu','$fukuanzhanghu','$fukuanjine') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='xiaoshoudan_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���۵�</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>������۵��� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.danjubianhao.value==""){alert("�����뵥�ݱ��");document.form1.danjubianhao.focus();return false;}if(document.form1.goumaidanwei.value==""){alert("�����빺��λ");document.form1.goumaidanwei.focus();return false;}if(document.form1.jingshouren.value==""){alert("�����뾭����");document.form1.jingshouren.focus();return false;}if(document.form1.danjia.value==""){alert("�����뵥��");document.form1.danjia.focus();return false;}if(document.form1.shuliang.value==""){alert("����������");document.form1.shuliang.focus();return false;}
}
	function gow()
	{
		location.href='xiaoshoudan_add.php?shangpinbianhao='+document.form1.shangpinbianhao.value+'&danjubianhao='+document.form1.danjubianhao.value+'&goumaidanwei='+document.form1.goumaidanwei.value+'&zhidanren='+document.form1.zhidanren.value+'&fahuocangku='+document.form1.fahuocangku.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>���ݱ�ţ�</td><td><input name='danjubianhao' type='text' id='danjubianhao' value='<?php echo $_GET["danjubianhao"]?>' />
	&nbsp;*�����أ�
	<input name="shengshi" type="text" id="shengshi" /></td>
	</tr><tr><td>����λ��</td>
	  <td><input name="goumaidanwei" type="text" id="goumaidanwei" />	    
      &nbsp;*</td>
	</tr><script language="javascript">document.form1.goumaidanwei.value='<?php echo $_GET["goumaidanwei"]?>';</script><tr><td>�Ƶ��ˣ�</td><td><input name='zhidanren' type='text' id='zhidanren' value='<?php echo $_GET["zhidanren"]?>' /></td></tr><tr><td>�����ˣ�</td><td><input name='jingshouren' type='text' id='jingshouren' value='<?php echo $_SESSION['username'];?>' />&nbsp;*</td></tr><tr><td>�����ֿ⣺</td><td><select name='fahuocangku' id='fahuocangku'><?php getoption("cangkuxinxi","cangkumingcheng")?></select></td></tr><script language="javascript">document.form1.fahuocangku.value='<?php echo $_GET["fahuocangku"]?>';</script><tr><td>��Ʒ��ţ�</td><td><select name='shangpinbianhao' id='shangpinbianhao' onchange='gow();'><?php getoption2("shangpinxinxi","shangpinbianhao")?></select></td></tr><tr><td>��Ʒ���ƣ�</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' <?php getitem("shangpinxinxi","shangpinmingcheng","shangpinbianhao",$_GET["shangpinbianhao"])?> /></td></tr><tr><td>���</td><td><input name='guige' type='text' id='guige' <?php getitem("shangpinxinxi","guige","shangpinbianhao",$_GET["shangpinbianhao"])?> /></td></tr><tr><td>�������ڣ�</td><td><input name='shengchanriqi' type='text' id='shengchanriqi' value='' onclick="getDate(form1.shengchanriqi,'2')" need="1" /></td></tr><tr><td>���ۣ�</td><td><input name='danjia' type='text' id='danjia' value='' />&nbsp;*</td></tr><tr><td>������</td><td><input name='shuliang' type='text' id='shuliang' value='' />&nbsp;*</td></tr><tr><td>��</td><td><input name='jine' type='text' id='jine' value='' /></td></tr><tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'></textarea></td></tr><tr><td>�����˻���</td><td><select name='fukuanzhanghu' id='fukuanzhanghu'><?php getoption("caiwuzhanghu","zhanghubianhao")?></select></td></tr><tr><td>�����</td><td><input name='fukuanjine' type='text' id='fukuanjine' value='' /></td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();" />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

