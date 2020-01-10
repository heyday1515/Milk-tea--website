<?php
session_start();
if(isset($_SESSION['Name']))
{
	echo 'Bạn đã đăng nhập với tên '.$_SESSION["Name"];
	include("headerLogin.php");
}
else
{
	echo 'Bạn chưa đăng nhập!';
	include('header.php');
}
?>