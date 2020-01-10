<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	include("php_layout/header.php");	
?>
<div class="form-sign">
	<h1>Sign In</h1>
	<form action="ConfirnSign.php" method="GET" class="sign">
		<input type="text" name="Fname" placeholder="  Full Name..." pattern="{2,50}" title="Không được chứa các ký tự đặc biệt"><br>
		<input style="margin-top: 20px;" type="text" name="Uname" placeholder="  User name..." pattern="[A-Za-z0-9_\.]{1,15}" title="Username bao gồm các ký tự chữ cái, chữ số, dấu gạch dưới, dấu chấm, độ dài 6-32 ký tự"><br>
		<input style="margin-top: 20px;" type="password" name="Pwd" placeholder="  Password..." pattern="[A-Z]{1}([\w_\.!@#$%^&*()]+){5,31}" title="Mật khẩu bao gồm các ký chữ cái, chữ số, ký tự đặc biệt, dấu chấm, bắt đầu bằng ký tự in hoa, độ dài 6-32 ký tự"><br>
		<input style="margin-top: 20px;" type="text" name="Phon" placeholder="  Phone..." pattern="[0-9]{10}" title="Phone chỉ gồm chữ số và độ dài là 10 ký tự"><br>
		<input style="margin-top: 20px;" type="text" name="Ema" placeholder="  Email..." pattern="[A-Za-z0-9_.]{6,32}@[a-zA-Z0-9]{2,12}[.]{1}[a-zA-Z]{2,12}" title="Theo định dạng 'Mymail@gmail.com'"><br>
		<input style="margin-top: 20px;" type="text" name="Addr" placeholder="  Address..." pattern=".{2,50}" title="Không được để trống"><br>
		<input type="submit" value="Đăng ký" class="btn-login">
	</form>
	<p>Bạn đã có tài khoản?</p>
    <div class="dvDN">
    	<a href="DangNhap.php">Đăng Nhập</a>
    </div>
</div>
<?php
	include("php_layout/footer.php");
?>
</body>
</html>