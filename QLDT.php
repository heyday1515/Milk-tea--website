<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doanh Thu</title>
	<link rel="stylesheet" href="css/style.css">
	<script src='vendor/bootstrap/js/Chart.min.js'></script>
</head>
<body>
	<?php
	include("headerAD.php");
	?>
<div class="a-right">
			<h1 style="text-align: center;">DOANH THU</h1>
			<ul style="margin:20px 40px auto auto;">
				<li style="">
					<canvas id="canvas" height="10" width="20" style="background-color: #5ebf62;"></canvas>
					<script>
						var ctx = document.getElementById("canvas").getContext('2d');
						var myChart = new Chart(ctx, {
							type: 'bar',
							data: {
								labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
								datasets: [{
									label: 'Năm 2018',
									data: [12, 19, 9, 5, 7, 10],
									backgroundColor: [
									'rgba(255, 99, 132, 0.2)',
									'rgba(54, 162, 235, 0.2)',
									'rgba(255, 206, 86, 0.2)',
									'rgba(75, 192, 192, 0.2)',
									'rgba(153, 102, 255, 0.2)',
									'rgba(255, 159, 64, 0.2)'
									],
									borderColor: [
									'#fff',
									'#fff',
									'#fff',
									'#fff',
									'#fff',
									'#fff'
									],
									borderWidth: 1
								}]
							},
							options: {
								scales: {
									yAxes: [{
										ticks: {
											beginAtZero:true
										}
									}]
								}
							}
						});
					</script>
				</li>
				<hr style="background-color:#fff;">
				<h1 style="text-align: center;">LƯỢT TRUY CẬP</h1>
				<li style="margin-bottom: 5px;">
					<canvas id="canvass" height="15" width="30" style="background-color: #5ebf62;"></canvas>
			    	<script>
						new Chart(document.getElementById("canvass"),
							{"type":"polarArea",
							"data":{
								"labels":["User","Khách","Mod","Admin","Styler"],
								"datasets":[{"label":"My First Dataset",
								"data":[11,16,7,3,5],
								"backgroundColor":["rgb(255, 99, 132)",
													"rgb(75, 192, 192)",
													"rgb(255, 205, 86)",
													"rgb(201, 203, 207)",
													"rgb(54, 162, 100)"]
											}]
									}
							});
					</script>
				</li>
			</ul>
		</div>
	</nav>
<?php
	include("php_layout/footer.php");
	?>
</body>
</html>