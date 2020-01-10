<?php
session_start();
$cart=$_SESSION['cart'];
$id=$_GET['productid'];
if($id == "Xoa")
{
	unset($_SESSION['cart']);
}
else
{
	unset($_SESSION['cart'][$id]);
}
header("location:GioHang.php");
exit();
?>