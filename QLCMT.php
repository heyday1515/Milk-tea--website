<?php
	if(isset($_GET['hidecmt']))
	{
		$xoa = $_GET['hidecmt'];
		include("Connecting.php");
		$result = $db->prepare("update comment set check_cmt = 'N' where cmt_id = '".$xoa."'");
		$result->execute();
	header("location:QLCMT.php");
	}
	if(isset($_GET['showcmt']))
	{
		$hien = $_GET['showcmt'];
		include("Connecting.php");
		$result = $db->prepare("update comment set check_cmt = 'Y' where cmt_id = '".$hien."'");
		$result->execute();
	header("location:QLCMT.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý comment</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		include("headerAD.php");
	?>
	<section class="dskh">
		<div class="dskh-1">
			<ul class="dskh-1-2">
				<?php
				echo '<li>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Mã CMT</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Tên khách hàng</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Nội dung</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Ngày đăng</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Check stt</p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Sản phẩm</p>
						</li>';
					include("Connecting.php");
					$result = $db->prepare("select * from comment");
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
						<a href="QLCMT.php?hidecmt='.$value[0].'"><input type="button" class="del" value="Xóa"></a>
						<a href="QLCMT.php?showcmt='.$value[0].'"><input type="button" class="confi" value="Duyệt"></a>
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