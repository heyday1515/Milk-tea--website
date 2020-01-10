<?php
$id="milktea/milktea(01).jpg";
$loi=array();
$loi["name"]=$loi["mess"]=NULL;
$name=$mess=NULL;
	if(isset($_POST['ok']))
	{
		//check name
		if(empty($_POST['name']))
			$loi["name"]="Xin hãy nhập tên!";
		else
		{
			$name = $_POST['name'];
		}
		//check mess
		if(empty($_POST['mess']))
			$loi["mess"]="Xin hãy nhập bình luận!";
		else
		{
			$mess = $_POST['mess'];
		}
		if($name && $mess)
		{
			include("../Connecting.php");
			$result = $db->prepare("insert into comment(name,message,time,check_cmt,new_id) values('".$name."','".$mess."',now(),'N','".$id."')");
			$result->execute();
		}
	}
?>
<style>
	.cmt{
		width: 60%;
		border: 1px solid #5ebf62; 
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
	</style>

<div class="cmt">
	<form action="php_cmt.php" class="cmt_form" method="POST">
		<div class="inp name_cmt"><input type="text" class="cm name" name="name" placeholder=<?php echo '"'.$loi["name"].'"';?>></div>
		<div class="inp mess_cmt"><textarea class="cm mess" name="mess" placeholder=<?php echo '"'.$loi["mess"].'"';?>></textarea></div>
		<input class="inp sub" type="submit" name="ok">
	</form>
</div>