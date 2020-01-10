
<div class="wrap">
	<div class="header">
		<div class="header-1">
			<div class="logo" style="position: relative; left: 0px; top: 0px; transition: none 0s ease 0s;" data-selected="true" data-label-id="0">
				<a href="MilkTea.php"><img class="lo" src="http://localhost:81/DOAN/logo/logo.png" alt="" style="position: relative; left: 332px; top: 13px; transition: none 0s ease 0s; will-change: top, left;"></a>
			</div>
			<a class="gio" href="GioHang.php" style="position: relative; left: -268px; top: -401px;">Giỏ Hàng</a>
			<a class="gio" href="DangNhap.php" style="position: relative; left: -57px; top: -401px;">Đăng nhập</a>
			<a class="gio" href="DangKy.php" style="position: relative; left: 142px; top: -401px;">Đăng ký</a>
			<div class="foot-b" style="margin-left: -20px;">
				<ul data-selected="true" data-label-id="0" style="position: relative; left: 5px; top: -415px; transition: none 0s ease 0s;">
					<p style="float: left; color: rgb(255, 255, 255); position: relative; left: -10px; top: -22px; transition: none 0s ease 0s;font-family: Air;" data-selected="true" data-label-id="0">Theo dõi:</p>
					<li style="float: left;"><a class="fb" href="fb.com"><i class="awe-br-fb"></i></a></li>
					<li style="float: left;"><a class="it" href="intagram.com"><i class="awe-br-it"></i></a></li>
				</ul>
		</div>
		</div>
	</div>
	<div class="menu">
		<ul class="nav">
			<?php
				$_findpath = $_SERVER['REQUEST_URI'];
				$_findpath = preg_match("/\/MilkTea.php/", $_findpath) ? "" : "Search.php";

				include("Connecting.php");
				$result = $db->prepare("select * from MENUHEADER");
				$result->execute();
				$rowsdata = $result ->fetchALL();
				foreach ($rowsdata as $value) {
					echo '<li><a href="'.$value[1].'">'.$value[0].'</a></li>';
				}

			?>
			<form action="<?=$_findpath; ?>" id="frmSearch" method="GET" class="form-inline" style="position: relative;top: -69px;width: 30%;right: -70%;">
				<input type="text" id="search" class="form-control" name="txtKey" placeholder=" Từ khóa..." style="position: relative; left: 1px; top: 30px;">
				<input type="submit" style="position:relative; border-radius: 4px;top:29px;height: 30px;box-sizing: border-box;border: 1px solid #5ebf62;outline: none;" value="Tìm">
			</form>
		</ul>
	</div>
</div>