<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restitution chronologique</title>
	<link rel="stylesheet" href="Calendar/calendar.css">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
</head>
<body>
	<?php include'../include/mainHeader.php' ?>
	<section class="inner-box section-hero">
        <span>Restitution Chronologique</span>
    </section>
	<label for="start">Calendrier:</label>
	<form lang="en" method="post" action="DonSelonChronologie.php">
		<input type="date" id="start" name="calendrier"
			   value="1400-01-01"
			   min="1400-01-01">
		<input type="submit" id="insere" name="insereDon">
	</form>
	<!--/*<?php if(isset($_POST['insereDon'])): ?>
		<?php if ($estDansDate == true): ?>
			<p>
			<?php echo '<a href="..\PerData\donPerDate.php?date=' . $dateEntree_fr->format('Y-m-d') . '">Aller à la page du '. $dateEntree_fr->format('Y-m-d') .'</a>' ?>
			</p>

		<?php elseif($estDansDate == false): ?>
			<p>Aucun don n'a été fais à cette date.</p>
		<?php endif; ?>
	<?php endif; ?>*/-->
	<div class="calendarObject"></div>
</body>
<script src="Calendar/calendar.js"></script>
<script>
	const calendar = new Calendar(".calendarObject", new Date(1400, 0));
</script>
</html>