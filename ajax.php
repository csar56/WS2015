<!DOCTYPE html>
<html lang="de">
<head>
	<title>AJAX Example - SauerIT</title>
	<?php include('php/layout/head.php');?>
	<script src="js/arsnovastats.js"></script>
	
	
	<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="bootstrap/jqplot/jquery.jqplot.min.js"></script>
	<script type="text/javascript" src="bootstrap/jqplot/plugins/jqplot.barRenderer.js"></script>
	<script type="text/javascript" src="bootstrap/jqplot/plugins/jqplot.pointLabels.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/jqplot/jquery.jqplot.css" />
</head>
<body>
	<?php include('php/layout/navbar.php');?>
	<main class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
					<script></script>
					<div id="chartdiv" style="height:400px;width:300px; "></div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<table id="myTable" class="table" border="1"></table>
			</div>
		</div>
	</main>
</body>
</html>
