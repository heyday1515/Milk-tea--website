<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Nhân Viên</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<h2>Thêm Nhân Viên</h2>
	<form action="croed.php" method="GET" class="sign">
		<input type="text" name="tennv" placeholder="  Tên Nhân Viên..."><br>
		<input style="margin-top: 20px;" type="text" name="diachi" placeholder="  Địa Chỉ..."><br>
		<input style="margin-top: 20px;" type="text" name="sdt" placeholder="  SĐT"><br>
		<input style="margin-top: 20px;" type="text" name="Loainv" placeholder="  Loại Nhân Viên.."><br>
		<input type="submit" value="Thêm" class="btn-login">
	</form>

	<?php
	include("footer.php");
	?>
</body>
</html>