<?php
echo'<form id=CT action="ChitietSp.php" method="GET">
								<div style="display:none;">
									<input type="text" name="img-sp" value="'.$value[4].'"><!--Lay hinh anh san pham-->
								</div>
							<div class="sp-1" style="margin:1%;float: left;position: relative; left: 6px; top: -1px;left:-2px;" data-selected="true" data-label-id="0"">
											<div class="sp-1-1" style="will-change: top, left;">
												<img src="'.$value[4].'" alt=""></br>
												'.$value[1].'<br>
												<span id="giasp">'.$value[2].'đ</span>
												<br>
												<br>
												<input id=Sm type="submit" class="btn-add" value="Chi tiết">
											</div>
							</div>
	</form>';
?>