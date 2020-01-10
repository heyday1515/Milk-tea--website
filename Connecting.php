<?php $conn = ("mysql:host=localhost;dbname=qlmt");
			$options= array (
				PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES UTF8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);

			try
			{
				$db= new PDO ($conn, 'root','',$options);
			}
			catch(PDOException $e)
			{
				echo $e ->getMessage();
				exit();
			}
?>