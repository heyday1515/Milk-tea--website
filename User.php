<?php
	session_start();
	if(isset($_POST["Username"]))
	{
		if($_POST["Username"]!="" || $_POST["pass"]!="" )
		{
		$uer="";
		$pss="";
		$tt="";
		include("Connecting.php");
		$result = $db->prepare("select * from khachhang where USERNAME = '".$_POST['Username']."'");
		$result->execute();
		$rowsdata = $result ->fetchALL();
			foreach ($rowsdata as $value)
				{
						$uer=$value[4];
						$pss=$value[5];
						$tt=$value[7];
				}
		if($_POST["Username"]==$uer && $_POST["pass"]==$pss)
		{
			if($tt!=0)
			{
				if(isset($_POST["save-info"])){
					setcookie("Username",$_POST["Username"],time()+3600);
					setcookie("Password",$_POST["pass"],time()+3600);
					}
				else{
					setcookie("Username","",time()-3600);
					setcookie("Password","",time()-3600);
				}
				$_SESSION['Name']=$uer;
				header('location:MilkTea.php');
			}
			else echo '<p style="text-align: center;color:red;">Tài khoản đã bị khóa!</p>';
		}
		else
		{
			echo '<p style="text-align: center;color:red;">Tên tài khoản hoặc mật khẩu không đúng!</p>';
		}
	}
	}
?>