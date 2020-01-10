<?php
			$dmuc = array(
							array("'anhKhac/flatlay (4).jpg'",'SẢN PHẨM MỚI'),
							array("'anhKhac/flatlay (6).jpg'",'KHUYẾN MÃI'),
							array("'anhKhac/flatlay (5).jpg'",'SẢN PHẨM THEO MÙA'),
							array("'anhKhac/flatlay (7).jpg'",'SẢN PHẨM NỔI BẬT')
							);

			include("Connecting.php");
			$result=$db->prepare("select * from sanpham where MASP like '%NE%' and TRANGTHAI=1");
			$result->execute();
			$rowsdata=$result->fetchALL();
			$k=0;
			foreach ($dmuc as $a) {
				echo '<div class="dmuc" style="width:99%;margin: 0 0 10px 0;overflow:hidden;box-shadow: rgba(0, 0, 0, 0.1) 5px 9px 5px 1px;" data-selected="true" data-label-id="0"">
						<div class="gioit" style="background-image:url('.$a[0].');float: left;margin:1%;width: 30%;height:270px;">
							<h2 style="text-align: center;margin-top:100px;">'.$a[1].'</h2>
							<p></p>
						</div>';
						$k++;
						if($k == 1)
						{
							foreach ($rowsdata as $value) 
								include("DanhMucCon.php");
								echo '</div>';
						}
						else if($k==2)
							{
								$result = $db->prepare("select * from sanpham where MASP LIKE '%KM%' and TRANGTHAI=1");
								$result->execute();
								$rowsdata = $result ->fetchALL();
							foreach ($rowsdata as $value) 
								include("DanhMucCon.php");
								echo '</div>';
						}
						else if($k==3)
							{
								$result = $db->prepare("select * from sanpham where MASP LIKE '%SS%' and TRANGTHAI=1");
								$result->execute();
								$rowsdata = $result ->fetchALL();
							foreach ($rowsdata as $value) 
								include("DanhMucCon.php");
								echo '</div>';
						}
						else
							{
								$result = $db->prepare("select * from sanpham where MASP LIKE '%NB%' and TRANGTHAI=1");
								$result->execute();
								$rowsdata = $result ->fetchALL();
							foreach ($rowsdata as $value) 
								include("DanhMucCon.php");
								echo '</div>';
						}
			};
	?>