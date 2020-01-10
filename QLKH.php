<?php
	if(isset($_GET['lockmakh']))
	{
		$lock = $_GET['lockmakh'];
		include("Connecting.php");
		$result = $db->prepare("update KHACHHANG set TRANGTHAI = 0 where MAKH = ".$lock);
		$result->execute();
	header("location:QLKH.php");
	}
	if(isset($_GET['unlockmakh']))
	{
		$unlock = $_GET['unlockmakh'];
		include("Connecting.php");
		$result = $db->prepare("update KHACHHANG set TRANGTHAI = 1 where MAKH = ".$unlock);
		$result->execute();
	header("location:QLKH.php");
	}
?>
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
		<a href="themkh.php"><input type="button" class="ins" value="Thêm"></a>
	</div>
	<section class="dskh">
		<div class="dskh-1">
			<ul class="dskh-1-2">
				<?php
				echo '<li>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;width:70px;">Ma KH </p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Ten KH </p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Dia Chi </p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">SDT </p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Username </p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Email </p>
						<p class="tt-kh" style="background-color:#5ebf62;color:#fff;">Trạng thái </p>
						</li>';
					include("Connecting.php");
					$result = $db->prepare("select * from KHACHHANG");
					$result->execute();
					$rowsdata = $result ->fetchALL();
					foreach ($rowsdata as $khach)
					{
						echo '<li>
						<input class="tt-kh" style="width:70px;" name="makh" value="'.$khach[0].'" >
						<input class="tt-kh" name="tenkh" value="'.$khach[1].'" >
						<input class="tt-kh" name="dchi" value="'.$khach[2].'" >
						<input class="tt-kh" name="sdt" value="'.$khach[3].'" >
						<input class="tt-kh" name="usr" value="'.$khach[4].'" >
						<input class="tt-kh" name="emai" value="'.$khach[6].'" >
						<input class="tt-kh" name="tthai" value="'.$khach[7].'" >
						<a href="QLKH.php?lockmakh='.$khach[0].'" ><input type="button" class="del" value="Khóa"></a>
						<a href="QLKH.php?unlockmakh='.$khach[0].'" ><input type="button" class="del" value="Mở Khóa"></a>
						<a href="QLKH.php?makh='.$khach[0].'?tenkh='.$khach[1].'?dchi'.$khach[2].'?sdt='.$khach[3].'?usr='.$khach[4].'?emai='.$khach[6].'?tthai='.$khach[7].'"><input type="button" class="edi" value="Sửa"></a>
						</li>';
						
					}
					/*if(isset($_GET['makh'])){
							$result = $db->prepare("update KHACHHANG set TENKH = ".$_GET['tenkh'].",DIACHI=".$_GET['dchi'].",SDT=".$_GET['sdt'].",EMAIL=".$_GET['emai']."TRANGTHAI = ".$_GET['tthai']." where MAKH='".$_GET['makh']."'");
							$result->execute();
						}*/
				?>
			</ul>
		</div>
	</section>
	<?php
		include("php_layout/footer.php");
	?>
</body>
</html>
