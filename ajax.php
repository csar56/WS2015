<!DOCTYPE html>
<html lang="de">
<head>
	<title>AJAX Example - SauerIT</title>
	<?php include('php/layout/head.php');?>
	<script src="js/arsnovastats.js"></script>
	
	
	<script type="text/javascript" src="bootstrap/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="bootstrap/jqplot/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="bootstrap/jqplot/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="bootstrap/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="bootstrap/jqplot/plugins/jqplot.pointLabels.min.js"></script>
<link rel="stylesheet" type="text/css" hrf="bootstrap/jqplot/jquery.jqplot.min.css" />
</head>
<body>
	<?php include('php/layout/navbar.php');?>
	<main class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div id="chart1" style="height:600px;width:100%; "></div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<table id="myTable" class="table" border="1"></table>
			</div>
		</div>
	</main>
</body>
</html>
