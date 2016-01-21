<!DOCTYPE html>
<html lang="de">
<head>
	<title>AJAX Example - SauerIT</title>
	<?php include('php/layout/head.php');?>
	<script src="js/arsnovastats.js"></script>
</head>
<body>
	<?php include('php/layout/navbar.php');?>
	<main class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
					<script>writeStats();setInterval(writeStats, 30000);</script>
					<p id="stats"></p>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<table id="myTable" class="table" border="1"></table>
			</div>
		</div>
	</main>
</body>
</html>
