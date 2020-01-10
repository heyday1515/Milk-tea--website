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
		if($_GET['mahd']=="" || $_GET['makh']=="" || $_GET['tongtien']=="" || $_GET['ngaylap']=="")
		{
			echo'<ul class="dk-2">
					<li>Xin hãy nhập đủ thông tin!!!</li>
					<li><a href="themhd.php">Quay lại.</a></li>
				</ul>';
				
		}	
		else
		{
			echo '<ul class="dk-2">
					<li>Mã HD: '.$_GET['mahd'].'</li>
					<li>Mã KH: '.$_GET['makh'].'</li>
					<li>Tổng tiền: '.$_GET['tongtien'].'</li>
					<li>Ngày lập: '.$_GET['ngaylap'].'</li>
				</ul>';

					include("Connecting.php");
					$result = $db->prepare("insert into hoadon(MAHD,MA_KH,TONGTIEN,NGAYLAP) values('".$_GET['mahd']."','".$_GET['makh']."','".$_GET['tongtien']."','".$_GET['ngaylap']."')");
					$result->execute();
		}	
	?>
    <ul class="dvDN-2" style="margin:auto;">
    	<li><a href="themhd.php">Thêm hóa đơn Khác</a></li>
    </ul>
</div>
<?php
	include("footer.php");
?>
</body>
</html>