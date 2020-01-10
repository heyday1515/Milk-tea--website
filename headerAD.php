<div class="wrap">
	<div class="header">
		<div class="header-1">
			<div class="logo" data-selected="true" data-label-id="0" style="transition: none 0s ease 0s;">
				<a href="MilkTea.php"><img class="lo" src="http://localhost:81/DOAN/logo/logo.png" alt="" style="position: relative; left: 332px; top: 13px; transition: none 0s ease 0s;" data-selected="true" data-label-id="0"></a>
			</div>
		</div>
	</div>
	<div class="menu">
		<ul class="nav">
			<?php
				$menu = array(
				array('KHÁCH HÀNG','QLKH.php'),
				array('HÓA ĐƠN','QLHD.php'),
				array('ĐƠN HÀNG','QLDH.php'),
				array('SẢN PHẨM','QLSP.php'),
				array('COMMENT','QLCMT.php'),
				array('DOANH THU','QLDT.php')
			);
				foreach ($menu as $value) {
					echo '<li><a href="'.$value[1].'">'.$value[0].'</a></li>';
				}

			?>
			<form id="frmSearch" class="form-inline" style="position: relative; will-change: top, left; left: -172px; top: -51px;">
				<input type="text" id="search-ad" class="form-control" name="txtKey" placeholder=" Tìm kiếm..." style="position: relative; left: 168px; top: 56px;">
			</form>
			</form>
		</ul>
	</div>
</div>