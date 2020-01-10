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
			<h2 style="margin-left: 20px; color: #5ebf62">FREEZE</h2>
		</div>
		<div class="sp-ingre">
			<?php
				include("connecting.php");
			?>
			<ul>
				<?php
					$result = $db->prepare("select * from `sanpham` where MASP LIKE 'FRE%' and TRANGTHAI=1");
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
 	