
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
	include("php_layout/header.php");
	include_once ("User.php");
	include_once ("DangNhap.php");

?>
<div class="form-login">
	<h1>Login</h1>
	<?php
	 if(isset($_COOKIE["Username"])){
	echo '<form action="DangNhap.php" class="login" method="POST">
		<input type="text" name="Username" value='.$_COOKIE["Username"].'><br>
		<input style="margin-top: 20px;" name="pass" type="password" value="'.$_COOKIE["Password"].'"><br>
		<input type="submit" onclick="myFunction()" value="Đăng nhập" class="btn-login">
		<div style="position: relative; left: -2px; top: -84px; transition: none 0s ease 0s;" data-selected="true" data-label-id="0">
			<input type="checkbox" name="save-info" value="1" checked ><span style="font-size: 20px;">Lưu thông tin</span>
		</div>
	</form>';
	} 
		else {
	echo'
	<form action="DangNhap.php" class="login" method="POST">
		<input type="text" name="Username" placeholder="  Tên người dùng..."><br>
		<input style="margin-top: 20px;" name="pass" type="password" placeholder="  Mật khẩu..."><br>
		<input type="submit" value="Đăng nhập" class="btn-login">
		<div style="position: relative; left: -2px; top: -84px; transition: none 0s ease 0s;" data-selected="true" data-label-id="0">
			<input type="checkbox" name="save-info" value="1" checked ><span style="font-size: 20px;">Lưu thông tin</span>
		</div>
	</form>';}
	?>
	<script>
		function myFunction(){
				alert("Xin chào <?php echo $namee ?>");
		}
	</script>
	<p>Bạn chưa có tài khoản?</p>
    <div class="dvDK" style="float:left;">
    	<a href="DangKy.php">Đăng Ký</a>
    </div>
    <div class="forgot-pw">
    	<a href="">Quên mật khẩu?</a>
    </div>
</div>
<?php
	include("php_layout/footer.php");
?>
</body>
</html>