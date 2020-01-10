<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý khách hàng</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<div class="button-ad">
		<a href="themnv.php"><input type="button" class="ins" value="Thêm"></a>
	</div>
	<section class="dskh">
		<div class="dskh-1">
			<ul class="dskh-1-2">
				<?php
				echo '<li>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Tên</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Địa chỉ</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">SĐT</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Loại</p>
						</li>';
					include("connecting.php");
					$result = $db->prepare("select * from `NHANVIEN`");
					$result->execute();
					$rowsdata = $result ->fetchALL();
					foreach ($rowsdata as $value){
						echo '<li>
						<input class="tt-kh" value="'.$value[0].'" >
						<input class="tt-kh" value="'.$value[1].'" >
						<input class="tt-kh" value="'.$value[2].'" >
						<input class="tt-kh" value="'.$value[3].'" >
						<a href=""><input type="button" class="del" value="Xóa"></a>
						<a href=""><input type="button" class="edi" value="Sửa"></a>
						</li>
						</li>';
					}
				?>
			</ul>
		</div>
	</section>
	<?php
		include("footer.php");
	?>
</body>
</html>