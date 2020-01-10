<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi tiết</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
		include("php_layout/ktheader.php");
	?>
	<div class="cart">
		<?php
		$ok=1;
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $k=>$v)
			{
				if(isset($k))
				{
				$ok=2;
				}
			}
		}
	?>
	<?php
		$id=$_GET['img-sp'];
		$nameproduct="";
		include("Connecting.php");
			$result=$db->prepare("select * from sanpham where img='".$_GET['img-sp']."'");
			$result->execute();
			$rowsdata = $result ->fetchALL();
			foreach ($rowsdata as $value) {

				echo '
				<div class="main-spc" style="border-bottom: 1px solid #5ebf62;">
					<div class="sp-left">
						<div class="m-sp-img">
							<img src="'.$value[4].'" alt="" width="120%" style="border: 1px solid #5ebf62">;
								
			</div>
		</div>
		<div class="sp-right">
			<h2>'.$value[1].'</h2><!--xuat ten san pham-->
			<hr style="height: 2px; background-color: green; width: 100px; float: left;">
			<br>
			<h3>Thông tin</h3>
			<table style="width:100%">
				<tr>
					<td>Tên:</td>
					<td>Giá Tiền (VNĐ)</td>
				</tr>
				<tr>
					<td>'.$value[1].'</td>
			
					<td>'.$value[2].'</td><!--xuat gia san pham-->					
				</tr>
			</table>';$nameproduct=$value[1];
			echo "<a href='Addcart1.php?item1=".$value[0]."'><input type='button' onclick=thongbao() class='addgh' value = 'Thêm vào giỏ hàng' style='font-size:15px;width:30%;height:30px;'></input></a>
		</div>
	</div>";
	};?>
	<script>
		function thongbao(){
			alert("Đã thêm <?php echo $nameproduct?> vào giỏ hàng!");
		}
		function thongbaoLogin(){
			alert("Hãy đăng nhập!");
		}
	</script>


	<?php
	$loi=array();
	$loi["mess"]="Bình luận";
	$name=$mess=NULL;
		if(isset($_POST['ok']))
		{
				$name = $_SESSION['Name'];
				//check mess
				if(empty($_POST['mess']))
					$loi["mess"]="Xin hãy nhập bình luận!";
				else
				{
					$mess = $_POST['mess'];
				}
				if($mess)
				{
					$result = $db->prepare("insert into comment(name,message,time,check_cmt,new_id) values('".$name."','".$mess."',now(),'N','".$id."')");
					$result->execute();
				}
			
		}
	?>
		<style>
	.cmt{
		width: 90%;
		margin-left: 50px;
		border-bottom: 1px solid #5ebf62; 
		padding-top: 20px;
	}
	.inp{
		margin-left: 20px;
		margin-bottom: 20px;
	}
	.mess{
		height: 150px;
		width: 70%;
	}
	.mess_content .mess_ct{
		margin-left: 50px;
	}
	.mess_content .boder-mess{
		border-bottom: 1px solid #dfefe0;
		width: 50%;
		margin-top: 10px;
		margin-bottom: 20px;
		margin-left: 30px;
	}
	</style>
	<div class="cmt">
		<h3>COMMENT</h3>
		<form action=<?php echo "ChitietSp.php?img-sp=".$id?> class="cmt_form" method="POST">
			<div class="inp mess_cmt"><textarea class="cm mess" name="mess" placeholder=<?php echo '"'.$loi["mess"].'"';?>></textarea></div>
			<?php
				if(isset($_SESSION['Name'])){
					echo '<input class="inp sub" type="submit" name="ok">';
				}
				else 
					echo '<a href="DangNhap.php"><input class="inp sub" type="button" value="Gửi"></a>';
			?>
		</form>
	<?php
		$result=$db->prepare("select name,message,time from comment where check_cmt='Y' and new_id ='".$id."'");
		$result->execute();
		$rowsdata = $result ->fetchALL();
		foreach ($rowsdata as $value)
		{
			echo '<div class="mess_content">';
			echo '<h4>'.$value[0].' - '.$value[2].'</h4>';
			echo '<div class="mess_ct">'.$value[1].'</div>';
			echo '<div class="boder-mess"></div>';
			echo '</div>';
		}
	?>
	</div>
	<?php
	echo '<h2>Sản phẩm khác:</h2>';
	include('DanhMuc.php');
	?>
	</div>
	<?php
		include("php_layout/footer.php");
	?>
</body>
