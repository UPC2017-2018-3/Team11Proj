<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="营业录入员")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	if($_SESSION['cx']=="营业受理员")
	{
		echo "<script>javascript:location.href='left3.html';</script>";
	}
	if($_SESSION['cx']=="配送管理员")
	{
		echo "<script>javascript:location.href='left4.html';</script>";
	}
	if($_SESSION['cx']=="系统管理员")
	{
		echo "<script>javascript:location.href='left.html';</script>";
	}

?>