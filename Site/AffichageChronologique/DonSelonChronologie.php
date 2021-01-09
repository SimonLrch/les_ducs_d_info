<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restitution chronologique</title>
	<link rel="stylesheet" href="Calendar/calendar.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
</head>
<body>
	<?php include'../include/mainHeader.php' ?>
	<section class="inner-box section-hero">
        <span class="titreSection">Restitution Chronologique</span>
    </section>
	<div class="barChartObject"></div>
	<div class="calendarObject"></div>
</body>
<script src="Calendar/calendar.js"></script>
<script src="Calendar/barChart.js"></script>
<script>
	const calendar = new Calendar(".calendarObject", new Date(1400, 0));
	const barChart = new BarChart(".barChartObject", calendar);
	
	window.onresize = function() {
		barChart.resize();
	}
</script>
</html>