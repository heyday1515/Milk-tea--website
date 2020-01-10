<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	include("php_layout/header.php");	
	
?>
<div class="form-sign">
	<?php 
		/*if(!$_GET['Fname'] || !$_GET['Uname'] || !$_GET['Pwd'] || !$_GET['CPwd'] || !$_GET['Phon'] || !$_GET['Addr'] || !$_GET['Ema'])
		{
			echo"<ul class='dk-2'>
					<li>Xin hãy nhập đủ thông tin!!!</li>
					<a href='javascript: history.go(-1)'>Trở lại</a>
				</ul>";
				
		}	
		else
		{*/
			$name = $_GET['Fname'];
			$uname = $_GET['Uname'];
			$psw = $_GET['Pwd'];
			$phone = $_GET['Phon'];
			$email = $_GET['Ema'];
			$add = $_GET['Addr'];
			$uname_test="";
			include("Connecting.php");
			$result = $db->prepare("select * from khachhang where USERNAME='".$uname."'");
			$result->execute();
			$rowsdata = $result ->fetchALL();
			if(empty($name))
			{
				echo "<h2>Tên đăng nhập trống. Vui lòng nhập tên đăng nhập!. <a href='javascript: history.go(-1)'>Trở lại</a>";
       	 		exit;
			}
			foreach ($rowsdata as $value)
				{
						$uname_test=$value[4];
				}
			if($uname_test==$uname){
				echo "<h2>Tên đăng nhập đã có người sử dụng. Vui lòng chọn tên đăng nhập khác!. <a href='javascript: history.go(-1)'>Trở lại</a>";
       	 		exit;
			}	
			if (empty($name)) {
			    echo "<h2>Họ và tên trống. Vui lòng nhập họ tên!. <a href='javascript: history.go(-1)'>Trở lại</a>";
       	 		exit;
			  }	
			 if (empty($psw)) {
			    echo "<h2>Mật khẩu trống. Vui lòng nhập!. <a href='javascript: history.go(-1)'>Trở lại</a>";
       	 		exit;
			  } 
			 if (empty($phone)) {
			    echo "<h2>Số điện thoại trống. Vui lòng nhập!. <a href='javascript: history.go(-1)'>Trở lại</a>";
       	 		exit;
			  } 
			if(empty($email)){
				echo "<h2>Email rỗng. Vui lòng nhập!. <a href='javascript: history.go(-1)'>Trở lại</a>";
        		exit;
			}
			if(empty($add)){
				echo "<h2>Address rỗng. Vui lòng nhập!. <a href='javascript: history.go(-1)'>Trở lại</a>";
        		exit;
			}
			echo '<ul class="dk-2">
					<li>Tên: '.$name.'</li>
					<li>Username: '.$uname.'</li>
					<li>Số điện thoại: '.$phone.'</li>
					<li>Email: '.$email.'</li>
					<li>Địa chỉ: '.$add.'</li>
				</ul>';
					$result = $db->prepare("insert into khachhang(TENKH,DIACHI,SDT,USERNAME,PASSWORD,EMAIL,TRANGTHAI) values('".$name."','".$add."','".$phone."','".$uname."','".$psw."','".$email."',1)");
					$result->execute();
		//}	
	?>
	
    <ul class="dvDN-1" style="margin:auto;">
    	<li>Bạn đã có tài khoản?</li>
    	<li><a href="DangNhap.php">Đăng Nhập</a></li>
    </ul>
</div>
<?php
	include("php_layout/footer.php");
?>
</body>
</html>