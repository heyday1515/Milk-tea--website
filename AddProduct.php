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
		if($_GET['masp']=="" || $_GET['tensp']=="" || $_GET['giasp']=="" || $_GET['size']=="" || $_GET['imgsp']=="")
		{
			echo'<ul class="dk-2">
					<li>Xin hãy nhập đủ thông tin!!!</li>
					<li><a href="javascript: history.go(-1)">Trở lại</a></li>
				</ul>';
				
		}	
		else
		{
			echo '<ul class="dk-2">
					<li>Mã SP: '.$_GET['masp'].'</li>
					<li>Tên: '.$_GET['tensp'].'</li>
					<li>Giá: '.$_GET['giasp'].'</li>
					<li>Size: '.$_GET['size'].'</li>
					<li>Image: '.$_GET['imgsp'].'</li>
				</ul>';

					include("Connecting.php");
					$result = $db->prepare("insert into sanpham(MASP,TENSP,GIASP,SIZE,IMG,TRANGTHAI) values('".$_GET['masp']."',N'".$_GET['tensp']."','".$_GET['giasp']."','".$_GET['size']."','".$_GET['imgsp']."',1)");
					$result->execute();
		}	
	?>
    <ul class="dvDN-2" style="margin:auto;">
    	<li><a href="ThemSP.php">Thêm sản phẩm Khác</a></li>
    </ul>
</div>
<?php
	include("footer.php");
?>
</body>
</html>