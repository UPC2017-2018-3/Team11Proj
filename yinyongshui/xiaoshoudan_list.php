<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���۵�</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�������۵��б���</p>
<form id="form1" name="form1" method="post" action="">
  ���ݱ�ţ�
    <input name="danjubianhao" type="text" id="danjubianhao" size="10" />
    ����λ��<select name='goumaidanwei' id='goumaidanwei'><option value="">����</option><?php getoption("kehuxinxi","kehumingcheng")?></select> �Ƶ��ˣ�<input name="zhidanren" type="text" id="zhidanren" size="10" /> 
    �����ˣ�<input name="jingshouren" type="text" id="jingshouren" size="10" /> 
    ��Ʒ��ţ�<input name="shangpinbianhao" type="text" id="shangpinbianhao" size="10" /> 
    ��Ʒ���ƣ�<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" size="10" />
    �����˻���<select name='fukuanzhanghu' id='fukuanzhanghu'><option value="">����</option><?php getoption("caiwuzhanghu","zhanghubianhao")?></select>
    �˻���
    <select name='issh' id='issh'>
      <option value="">����</option>
      <option value="��">��</option>
      <option value="��">��</option>
      
    </select>
    <input type="submit" name="Submit" value="����" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>���ݱ��</td><td bgcolor='#CCFFFF'>����λ</td><td bgcolor='#CCFFFF'>�Ƶ���</td><td bgcolor='#CCFFFF'>������</td><td bgcolor='#CCFFFF'>��Ʒ���</td><td bgcolor='#CCFFFF'>��Ʒ����</td><td bgcolor='#CCFFFF'>��������</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>���</td><td bgcolor='#CCFFFF'>�����˻�</td><td width="120" align="center" bgcolor="#CCFFFF">����ʱ��</td>
    <td width="70" align="center" bgcolor="#CCFFFF">�Ƿ��˻�</td>
    <td width="70" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from xiaoshoudan where 1=1";
  
if ($_POST["danjubianhao"]!=""){$nreqdanjubianhao=$_POST["danjubianhao"];$sql=$sql." and danjubianhao like '%$nreqdanjubianhao%'";}
if ($_POST["goumaidanwei"]!=""){$nreqgoumaidanwei=$_POST["goumaidanwei"];$sql=$sql." and goumaidanwei like '%$nreqgoumaidanwei%'";}
if ($_POST["zhidanren"]!=""){$nreqzhidanren=$_POST["zhidanren"];$sql=$sql." and zhidanren like '%$nreqzhidanren%'";}
if ($_POST["jingshouren"]!=""){$nreqjingshouren=$_POST["jingshouren"];$sql=$sql." and jingshouren like '%$nreqjingshouren%'";}
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["fukuanzhanghu"]!=""){$nreqfukuanzhanghu=$_POST["fukuanzhanghu"];$sql=$sql." and fukuanzhanghu like '%$nreqfukuanzhanghu%'";}
if ($_POST["issh"]!=""){$nissh=$_POST["issh"];$sql=$sql." and issh like '%$nissh%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
	
{
$ze=$ze+floatval(mysql_result($query,$i,jine));
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,danjubianhao);?></td><td><?php echo mysql_result($query,$i,goumaidanwei);?></td><td><?php echo mysql_result($query,$i,zhidanren);?></td><td><?php echo mysql_result($query,$i,jingshouren);?></td><td><?php echo mysql_result($query,$i,shangpinbianhao);?></td><td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td><td><?php echo mysql_result($query,$i,shengchanriqi);?></td><td><?php echo mysql_result($query,$i,danjia);?></td><td><?php echo mysql_result($query,$i,shuliang);?></td><td><?php echo mysql_result($query,$i,jine);?></td><td><?php echo mysql_result($query,$i,fukuanzhanghu);?></td><td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="90" align="center">
	<a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=xiaoshoudan" onclick="return confirm('��ȷ��Ҫִ�д˲�����')"><?php echo mysql_result($query,$i,"issh")?></a>
	</td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=xiaoshoudan" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="xiaoshoudan_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="xiaoshoudan_detail.php?id=<?php echo mysql_result($query,$i,"id");?>" >��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php
		echo $rowscount;
	?>���������ܶ�<?php echo $ze?>Ԫ,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" />
</p>
<p align="center"><a href="xiaoshoudan_list.php?pagecurrent=1">��ҳ</a>, <a href="xiaoshoudan_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="xiaoshoudan_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="xiaoshoudan_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>
