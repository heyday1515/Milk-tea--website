<?php
if(isset($_POST['submit']))
{
	foreach($_POST['qty'] as $key=>$value)
	{
		if( ($value == 0) and (is_numeric($value)))
		{
			unset ($_SESSION['cart'][$key]);
		}
		elseif(($value > 0) and (is_numeric($value)))
		{
			$_SESSION['cart'][$key]=$value;
		}
	}
	header("location:GioHang.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ Hàng</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	include("php_layout/ktheader.php");	
?>
<div class="Cart-GH">
<div class="giohang">
		<?php
			$ok=1;
			if(isset($_SESSION['cart']))
			{
				foreach($_SESSION['cart'] as $k => $v)
				{
					if(isset($k))
					{
						$ok=2;
					}
				}
			}
			if($ok == 2)
			{

			$total=0;
			include("Connecting.php");
			echo "<form action='GioHang.php' method='post'>";
				foreach($_SESSION['cart'] as $key=>$value)
				{
					$item[]=$key;
				}
			$str=implode("','",$item);
			$sql ="select * from sanpham where MASP in ('".$str."')";
			$result = $db->prepare($sql);
			$result->execute();
			$rowsdata = $result ->fetchALL();
			foreach ($rowsdata as $value){
				
			echo"<div id='SPGH' style='border:1px solid #5ebf62; margin-bottom:10px;padding:10px;'>
					<div class='sp-img'>
						<a href='ChitietSp.php?img-sp=".$value[4]."'><img class='img-sp' src=".$value[4]." alt=''></a>
					</div>"	;
				echo "<div class='pro'>";
					echo "<h3>Tên: ".$value[1]."</h3>";
					echo"<div class='gia-sp'>
								<span>
									Đơn Giá: ".number_format($value[2])."VND<br/>
								</span>
						</div>";
					echo "<p align='right'>Số lượng: <input type='text' name='qty[".$value[0]."]' size='5' value='".$_SESSION['cart'][$value[0]]."'> - ";
					echo "<a href='XoaSpGH.php?productid=$value[MASP]'>Xóa sản phẩm</a></p>";
					echo "<p align='right'> Giá tiền cho sản phẩm: ". number_format($_SESSION['cart'][$value[0]]*$value[2]) ." VND</p>";
			echo "</div>
			</div>";
			$total=$total+$_SESSION['cart'][$value[0]]*$value[2];
			}
		echo "<div class='pro' align='right'>";
		echo "<b>Tong tien cho cac mon hang: <font color='red'>". number_format($total)." VND</font></b>";
		echo "</div>";
		echo "<input type='submit' name='submit' value='Cập nhật'>";
		echo "<div class='pro' align='center'>";
		echo "<b><a href='MilkTea.php'>Mua sản phẩm khác</a> - <a href='XoaSpGH.php?productid=Xoa'>Xóa tất cả sản phẩm trong giỏ hàng</a></b>";
		echo "</div>";
	}
	else
	{
		echo "<div class='pro'>";
		echo "<p align='center'>Không có sản phẩm trong giỏ hàng!<br /><a href='MilkTea.php'>Mua hàng</a></p>";
		echo "</div>";
	}

	?>
</div>
<div class="info-kh" style="margin-bottom: 10px;">
	<h2 style="text-align: center;font-family: Air;">Thông tin khách hàng</h2>
	<div class="ttkh-1">
				<?php
				if(isset($_SESSION['Name']))
					include("php_include/info_dathang_2.php");
				else
					include("php_include/info_dathang_1.php");
				?>
	</div>
</div>
</div>
<?php
	include("php_layout/footer.php");
?>
</body>
</html>
