<?php
	if(isset($_GET['xoasp']))
	{
		$xoa = $_GET['xoasp'];
		include("Connecting.php");
		$result = $db->prepare("update SANPHAM set TRANGTHAI = 0 where MASP = '".$xoa."'");
		$result->execute();
	header("location:QLSP.php");
	}
	if(isset($_GET['hiensp']))
	{
		$hien = $_GET['hiensp'];
		include("Connecting.php");
		$result = $db->prepare("update SANPHAM set TRANGTHAI = 1 where MASP = '".$hien."'");
		$result->execute();
	header("location:QLSP.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý sản phẩm</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<div class="button-ad">
		<a href="ThemSP.php"><input type="button" class="ins" value="Thêm"></a>
	</div>
	<section class="dskh">
		<div class="dskh-1">
			<ul class="dskh-1-2">
				<?php
					echo '<li>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Mã SP</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Tên SP</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Giá</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Size</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Image</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Trạng thái</p>
						</li>';
						include ("Connecting.php");
					$result = $db->prepare("select * from `SANPHAM`");
					$result->execute();
					$rowsdata = $result ->fetchALL();
					foreach ($rowsdata as $value){
						echo '<li>
						<input class="tt-kh" value="'.$value[0].'" >
						<input class="tt-kh" value="'.$value[1].'" >
						<input class="tt-kh" value="'.$value[2].'" >
						<input class="tt-kh" value="'.$value[3].'" >
						<input class="tt-kh" value="'.$value[4].'" >
						<input class="tt-kh" value="'.$value[5].'" >
						<a href="QLSP.php?xoasp='.$value[0].'"><input type="button" class="del" value="Ẩn"></a>
						<a href="QLSP.php?hiensp='.$value[0].'"><input type="button" class="unl" value="Hiện"></a>
						<a href=""><input type="button" class="edi" value="Sửa"></a>
						</li>';
					}
				?>
			</ul>
		</div>
	</section>
	<?php
		include("php_layout/footer.php");
	?>
</body>
</html>