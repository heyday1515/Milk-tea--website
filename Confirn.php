<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	include("headerAD.php");	
?>
<div class="form-sign">
	<?php
		if($_GET['tenkh']=="" || $_GET['diachi']=="" || $_GET['sdt']=="" || $_GET['username']=="" || $_GET['Email']=="")
		{
			echo'<ul class="dk-2">
					<li>Xin hãy nhập đủ thông tin!!!</li>
					<li><a href="themkh.php">Quay lại</a></li>
				</ul>';
				
		}	
		else
		{
			echo '<ul class="dk-2">
					<li>Tên: '.$_GET['tenkh'].'</li>
					<li>Username: '.$_GET['username'].'</li>
					<li>Số điện thoại: '.$_GET['sdt'].'</li>
					<li>Email: '.$_GET['Email'].'</li>
					<li>Địa chỉ: '.$_GET['diachi'].'</li>
				</ul>';

					include("Connecting.php");
					$result = $db->prepare("insert into khachhang(TENKH,DIACHI,SDT,USERNAME,EMAIL) values('".$_GET['tenkh']."','".$_GET['diachi']."','".$_GET['sdt']."','".$_GET['username']."','".$_GET['Email']."')");
					$result->execute();
		}	
	?>
    <ul class="dvDN-2" style="margin:auto;">
    	<li><a href="themkh.php">Thêm Khách Hàng Khác</a></li>
    </ul>
</div>
<?php
	include("php_layout/footer.php");
?>
</body>
</html>