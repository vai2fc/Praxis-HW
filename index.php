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
		foreach($authors as $name => $date) {
			echo "<ul>$name died in $date.</ul>";
		}
	?>

</body>

</html>