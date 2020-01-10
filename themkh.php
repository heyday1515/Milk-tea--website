<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Khách Hàng</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<h2>Thêm Khách Hàng</h2>
	<form action="Confirn.php" method="GET" class="sign">
		<input type="text" name="tenkh" placeholder="  Tên khách hàng..."><br>
		<input style="margin-top: 20px;" type="text" name="diachi" placeholder="  Địa Chỉ..."><br>
		<input style="margin-top: 20px;" type="text" name="sdt" placeholder="  SĐT"><br>
		<input style="margin-top: 20px;" type="text" name="username" placeholder="  Username.."><br>
		<input style="margin-top: 20px;" type="text" name="Email" placeholder="  Email..."><br>
		<input type="submit" value="Thêm" class="btn-login">
	</form>

	<?php
	include("footer.php");
	?>
</body>
</html>