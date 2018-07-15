<?php 
$id=$_GET["id"];
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>内容详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>内容详细： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from xiaoshoudan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <td width='11%'>单据编号：</td><td width='39%'><?php echo mysql_result($query,0,danjubianhao);?></td><td width='11%'>购买单位：</td><td width='39%'><?php echo mysql_result($query,0,goumaidanwei);?></td></tr><tr><td width='11%'>制单人：</td><td width='39%'><?php echo mysql_result($query,0,zhidanren);?></td><td width='11%'>经手人：</td><td width='39%'><?php echo mysql_result($query,0,jingshouren);?></td></tr><tr><td width='11%'>发货仓库：</td><td width='39%'><?php echo mysql_result($query,0,fahuocangku);?></td><td width='11%'>商品编号：</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td></tr><tr><td width='11%'>商品名称：</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td><td width='11%'>规格：</td><td width='39%'><?php echo mysql_result($query,0,guige);?></td></tr><tr><td width='11%'>生产日期：</td><td width='39%'><?php echo mysql_result($query,0,shengchanriqi);?></td><td width='11%'>单价：</td><td width='39%'><?php echo mysql_result($query,0,danjia);?></td></tr><tr><td width='11%'>数量：</td><td width='39%'><?php echo mysql_result($query,0,shuliang);?></td><td width='11%'>金额：</td><td width='39%'><?php echo mysql_result($query,0,jine);?></td></tr><tr><td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td><td width='11%'>付款账户：</td><td width='39%'><?php echo mysql_result($query,0,fukuanzhanghu);?></td></tr><tr><td width='11%'>付款金额：</td><td width='39%'><?php echo mysql_result($query,0,fukuanjine);?></td><td>&nbsp;</td><td>&nbsp;</td>
    <tr>
      <td colspan="4" align="center"><input type="button" name="Submit2" value="打印本页" onclick="window.print();" />
      <input type="button" name="Submit" value="返回" onclick="javascript:history.back()" /></td>
    </tr>
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

