<?php
	session_start();
	unset($_SESSION['cart']);
	echo 'đã tạo đơn hàng '.$_GET['namekh'];
?>