<!DOCTYPE html>

<html>

<head>
	<title>Praxis Homework</title>
</head>

<body>
	<h1>School Address</h1>

	<?php
		$address1 = "<p>McIntire Department of Art<br/>University of Virginia<br/>Charlottesville, VA 22903</p>";
		echo $address1;
	?>

	<h1>Dead People</h1>

	<?php
		$authors = array(
			"Charles Dickens" => "1870",
			"William Thackeray" => "1863",
			"Anthony Trollope" => "1882",
			"Gerard Manley Hopkins" => "1889");
		foreach ($authors as $name => $date) {
			echo "<ul>$name died in $date.</ul>";
		}
	?>

	<h1>Chronologically-Ordered Dead People</h1>
	<?php	
		$authors = [
			"Charles Dickens" => "1870",
			"William Thackeray" => "1863",
			"Anthony Trollope" => "1882",
			"Gerard Manley Hopkins" => "1889"];
		asort($authors);
		foreach ($authors as $name => $date) {
			echo "<ul>$name died in $date.</ul>";
		}
	?>
	<h1>Alphabetically-Sorted Dead People</h1>
		<?php	
		$authors = [
			"Charles Dickens" => "1870",
			"William Thackeray" => "1863",
			"Anthony Trollope" => "1882",
			"Gerard Manley Hopkins" => "1889"];
		ksort($authors);
		foreach ($authors as $name => $date) {
			echo "<ul>$name died in $date.</ul>";
		}
	?>


	<form action="catsrule.php" method = "POST">
		Enter your name: <input type = "text" name = "name"><br />
		<input type = "submit" value = "Click me for awesomeness">
	</form>

	<h1>Second-to-Year Conversion</h1>
	<?php
		$seconds = [6000000000, 60, 40000.33];

		function ytos($seconds)
		{
			$conversion = 60*60*24*365.25;
			return $seconds/$conversion;
		}
		foreach ($seconds as $second)
			echo ytos($second) . "<br/>";
	?>

	<h1>Time-Traveller Greetings Generator</h1>
	<form action="time_greetings.php" method = "GET">
		Enter your name: <input type = "text" name = "name"><br />
		From what year did you arrive? <input type = "text" name = "date"><br />
		<input type = "submit" value = "Click me for greetings">
	</form>

</body>

</html>