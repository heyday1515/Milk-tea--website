<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sản phẩm</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<h2>Thêm Sản phẩm</h2>
	<form action="AddProduct.php" method="GET" class="sign">
		<input type="text" name="masp" placeholder="  Mã..."><br>
		<input style="margin-top: 20px;" type="text" name="tensp" placeholder="  Tên..."><br>
		<input style="margin-top: 20px;" type="text" name="giasp" placeholder="  Giá..."><br>
		<input style="margin-top: 20px;" type="text" name="size" placeholder="  Size..."><br>
		<input style="margin-top: 20px;" type="text" name="imgsp" placeholder="  Đường dẫn hình ảnh..."><br>
		<input type="submit" value="Thêm" class="btn-login">
	</form>

	<?php
	include("footer.php");
	?>
</body>
</html>