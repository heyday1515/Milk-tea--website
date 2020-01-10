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
		if($_GET['tennv']=="" || $_GET['diachi']=="" || $_GET['sdt']=="" || $_GET['Loainv']=="" )
		{
			echo'<ul class="dk-2">
					<li>Xin hãy nhập đủ thông tin!!!</li>
					<li><a href="themnv.php">Quay lại.</a></li>
				</ul>';
				
		}	
		else
		{
			echo '<ul class="dk-2">
					<li>Tên: '.$_GET['tennv'].'</li>
					<li>Địa Chỉ: '.$_GET['diachi'].'</li>
					<li>Số điện thoại: '.$_GET['sdt'].'</li>
					<li>Loại Nhân Viên: '.$_GET['Loainv'].'</li>
					
				</ul>';

					include("Connecting.php");
					$result = $db->prepare("insert into nhanvien(TENNV,DIACHI,SDT,LOAINV) values('".$_GET['tennv']."','".$_GET['diachi']."','".$_GET['sdt']."','".$_GET['Loainv']."')");
					$result->execute();
		}	
	?>
    <ul class="dvDN-2" style="margin:auto;">
    	<li><a href="themnv.php">Thêm Nhân Viên Khác</a></li>
    </ul>
</div>
<?php
	include("footer.php");
?>
</body>
</html>