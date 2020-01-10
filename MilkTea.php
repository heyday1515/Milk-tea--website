<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HEY HEY HEY</title>
	<link rel="icon" href="Logo/logo.png">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>	
	<?php
		include_once("php_layout/ktheader.php")
	?>
	<?php 
		if(isset($_GET['txtKey'])){
			include "SearchChild.php";
		} else {
?>
	<div class="section">
	<?php
		include('DanhMuc.php');
	?>
	</div>
	<?php } include("php_layout/footer.php");
	?>
</body>
</html>