<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="Ӫҵ¼��Ա")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	if($_SESSION['cx']=="Ӫҵ����Ա")
	{
		echo "<script>javascript:location.href='left3.html';</script>";
	}
	if($_SESSION['cx']=="���͹���Ա")
	{
		echo "<script>javascript:location.href='left4.html';</script>";
	}
	if($_SESSION['cx']=="ϵͳ����Ա")
	{
		echo "<script>javascript:location.href='left.html';</script>";
	}

?>