<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HEY HEY HEY</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
	h2{
		color: #5ebf62;
	}
	div.infouser{
		width: 70%;
		margin-left: 5%;
		background-color:#f1f1f1;
		margin-bottom: 25px;
		padding: 2%;
	}
	div.infouer{
		margin-left: 2%;
	}
	input{
		border-radius: 5px;
	}
</style>
<body>
	<?php 
		include("php_layout/ktheader.php");

					include("Connecting.php");
					$result = $db->prepare("select * from khachhang where Username ='".$_SESSION['Name']."'");
					$result->execute();
					$rowsdata = $result ->fetchALL();
					foreach ($rowsdata as $value){
						echo "<h2>Thông tin người dùng</h2>
						<div class='infouser'>
							<div class='infouer'>
							<p>Tên:</p><input style='width:300px;font-size: 20px; margin-bottom: 5px;' type='text' name='ten' value='".$value[1]."'> </br>
							<p>Địa chỉ:</p><input style='width:300px;font-size: 20px; margin-bottom: 5px;' type='text' name='dchi' value='".$value[2]."'></br>
							<p>Số điện thoại:</p><input style='width:300px;font-size: 20px; margin-bottom: 5px;' type='text' name='sdt' value='".$value[3]."'></br>
							<p>Email:</p><input style='width:300px;font-size: 20px; margin-bottom: 25px;' type='text' name='emai' value='".$value[6]."'>
						</div>
					</div>";
					}
				?>
	<?php
		include("php_layout/footer.php");
	?>
</body>