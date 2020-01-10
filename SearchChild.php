<div class="sp-info">
		<div class="h2-1">
			<h2 style="color: #5ebf62">Kết quả tìm kiếm:<?php echo $_GET['txtKey']?></h2>
		</div>
		<div class="sp-ingre">
			<ul>
		<?php
		$key=$_GET['txtKey'];
			if($key==""){
			$result=$db->prepare("select *from sanpham where trangthai=1 ");
		$result->execute();
		$rowsdata=$result->fetchALL();
			foreach ($rowsdata as $value)
				{
						include("sanphamcon.php");
				}
				
			}
			else 
			{
			$result = $db->prepare("select * from sanpham where (TENSP LIKE '%".$key."%' or GIASP LIKE '%".$key."%' )and TRANGTHAI=1" );
			$result->execute();
			$rowsdata = $result ->fetchALL();
			foreach ($rowsdata as $value)
				{
						include("sanphamcon.php");
				}
			}
		?>
		</ul>
		</div>
	</div>