<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HEY HEY HEY</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
		include("php_layout/ktheader.php");
	?>
	<div class="sp-info">
		<div class="h2-1">
			<h2 style="color: #5ebf62">MILK TEA</h2>
		</div>
		<div class="sp-ingre">
			<ul>
			<?php
					include("Connecting.php");
					$result = $db->prepare("select * from sanpham where MASP LIKE 'TS%' and TRANGTHAI=1");
					$result->execute();
					$rowsdata = $result ->fetchALL();
					foreach ($rowsdata as $value){
						include("sanphamcon.php");
					}
				?>
			</ul>
		</div>
	</div>
	<?php
		include("php_layout/footer.php");
	?>
</body>