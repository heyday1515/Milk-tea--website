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
	<h2>Thêm Hóa đơn</h2>
	<form action="cread.php" method="GET" class="sign">
		<input type="text" name="mahd" placeholder="  Mã Hóa Đơn..."><br>
		<input style="margin-top: 20px;" type="text" name="makh" placeholder="  Mã Khách Hàng..."><br>
		<input style="margin-top: 20px;" type="text" name="tongtien" placeholder=" Tổng Tiền"><br>
		<input style="margin-top: 20px;" type="text" name="ngaylap" placeholder="  Ngày lập.."><br>
		<input type="submit" value="Thêm" class="btn-login">
	</form>

	<?php
	include("footer.php");
	?>
</body>
</html>