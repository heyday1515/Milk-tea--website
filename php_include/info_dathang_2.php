<?php
			$nam=NULL;
			$sdt=NULL;
			$emai=NULL;
			$dchi=NULL;
			include("Connecting.php");
			$result = $db->prepare("select * from khachhang where Username ='".$_SESSION['Name']."'");
			$result->execute();
			$rowsdata = $result ->fetchALL();
			foreach ($rowsdata as $value)
			{
			$nam=$value[1];
			$sdt=$value[3];
			$emai=$value[6];
			$dchi=$value[2];
			echo '
				<h3>Tên người nhận</h3>
				<input type="text" class="namekh" value="'.$value[1].'">
				<h3>Số điện thoại</h3>
				<input type="text" class="sdtkh" value="'.$value[3].'">
				<h3>Email</h3>
				<input type="text" class="emailkh" value="'.$value[6].'">
				<h3>Địa chỉ giao hàng</h3>
				<input type="text" class="diachikh" value="'.$value[2].'">
				<br>';
			}
				
			echo '<a href="addDH.php?namekh='.$nam.'"><input type="button" value="Đặt hàng" class="btn-next-1">';
			
?>