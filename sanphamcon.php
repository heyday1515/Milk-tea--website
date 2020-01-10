
<?php
						echo'<form id=CT action="ChitietSp.php" method="GET">
								<div style="display:none;">
									<input type="text" name="img-sp" value="'.$value[4].'"><!--Lay hinh anh san pham-->
								</div>
							<li>
							<div class="d-img">
								<a href="#"><img src="'.$value[4].'" alt="" width="100%" height="300px" class="img-cs"></a>
							</div>
								<h4>'.$value[1].'</h4>
								<p>'.$value[2].'đ</p>
							<input id=submit type="submit" class="btn-add" value="Chi tiết" tyle="background-color:#5ebf62;color:#fff;border:1px solid #fff">
							</li>
							</form>';
?>