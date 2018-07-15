<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$danjubianhao=$_POST["danjubianhao"];$goumaidanwei=$_POST["goumaidanwei"];$zhidanren=$_POST["zhidanren"];$jingshouren=$_POST["jingshouren"];$fahuocangku=$_POST["fahuocangku"];$shangpinbianhao=$_POST["shangpinbianhao"];$shangpinmingcheng=$_POST["shangpinmingcheng"];$guige=$_POST["guige"];$shengchanriqi=$_POST["shengchanriqi"];$danjia=$_POST["danjia"];$shuliang=$_POST["shuliang"];$jine=$_POST["jine"];$beizhu=$_POST["beizhu"];$fukuanzhanghu=$_POST["fukuanzhanghu"];$fukuanjine=$_POST["fukuanjine"];
	$sql="update xiaoshoudan set danjubianhao='$danjubianhao',goumaidanwei='$goumaidanwei',zhidanren='$zhidanren',jingshouren='$jingshouren',fahuocangku='$fahuocangku',shangpinbianhao='$shangpinbianhao',shangpinmingcheng='$shangpinmingcheng',guige='$guige',shengchanriqi='$shengchanriqi',danjia='$danjia',shuliang='$shuliang',jine='$jine',beizhu='$beizhu',fukuanzhanghu='$fukuanzhanghu',fukuanjine='$fukuanjine' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='xiaoshoudan_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改销售单</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>修改销售单： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from xiaoshoudan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>单据编号：</td><td><input name='danjubianhao' type='text' id='danjubianhao' value='<?php echo mysql_result($query,$i,danjubianhao);?>' /></td></tr><tr><td>购买单位：</td><td><select name='goumaidanwei' id='goumaidanwei'><?php getoption("kehuxinxi","kehumingcheng")?></select></td></tr><script language="javascript">document.form1.goumaidanwei.value='<?php echo mysql_result($query,$i,goumaidanwei);?>';</script><tr><td>制单人：</td><td><input name='zhidanren' type='text' id='zhidanren' value='<?php echo mysql_result($query,$i,zhidanren);?>' /></td></tr><tr><td>经手人：</td><td><input name='jingshouren' type='text' id='jingshouren' value='<?php echo mysql_result($query,$i,jingshouren);?>' /></td></tr><tr><td>发货仓库：</td><td><select name='fahuocangku' id='fahuocangku'><?php getoption("cangkuxinxi","cangkumingcheng")?></select></td></tr><script language="javascript">document.form1.fahuocangku.value='<?php echo mysql_result($query,$i,fahuocangku);?>';</script><tr><td>商品编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='<?php echo mysql_result($query,$i,shangpinbianhao);?>' /></td></tr><tr><td>商品名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='<?php echo mysql_result($query,$i,shangpinmingcheng);?>' /></td></tr><tr><td>规格：</td><td><input name='guige' type='text' id='guige' value='<?php echo mysql_result($query,$i,guige);?>' /></td></tr><tr><td>生产日期：</td><td><input name='shengchanriqi' type='text' id='shengchanriqi' value='<?php echo mysql_result($query,$i,shengchanriqi);?>' onclick="getDate(form1.shengchanriqi,'2')" need="1" /></td></tr><tr><td>单价：</td><td><input name='danjia' type='text' id='danjia' value='<?php echo mysql_result($query,$i,danjia);?>' /></td></tr><tr><td>数量：</td><td><input name='shuliang' type='text' id='shuliang' value='<?php echo mysql_result($query,$i,shuliang);?>' /></td></tr><tr><td>金额：</td><td><input name='jine' type='text' id='jine' value='<?php echo mysql_result($query,$i,jine);?>' /></td></tr><tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,$i,beizhu);?></textarea></td></tr><tr><td>付款账户：</td><td><select name='fukuanzhanghu' id='fukuanzhanghu'><?php getoption("caiwuzhanghu","zhanghubianhao")?></select></td></tr><script language="javascript">document.form1.fukuanzhanghu.value='<?php echo mysql_result($query,$i,fukuanzhanghu);?>';</script><tr><td>付款金额：</td><td><input name='fukuanjine' type='text' id='fukuanjine' value='<?php echo mysql_result($query,$i,fukuanjine);?>' /></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

