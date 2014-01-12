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

	<h1>Multiply the Fun</h1>
	<form action="multiply.php" method = "GET">
		First number: <input type = "number" name = "number_1"><br />
		Second number: <input type = "number" name = "number_2"><br />	
		<input type = "submit" value = "Multiply!">
	</form>
    
    <h1>Divide and Conquer</h1>
    <form action = "divide.php" method = "POST">
    	Numerator: <input type = "number" name = "numerator"><br />
    	Denominator: <input type = "number" name = "denominator"><br />
    	<input type = "submit" value = "Divide!">
    </form>

    <h1>For the mathematically challenged, which is greater?</h1>
    <form action = "compare.php" method = "GET">
    	First number: <input type = "number" name = "number_1"><br />
    	Second number: <input type = "number" name = "number_2"><br />
    	<input type = "submit" value = "Compare">
    </form>

    <h1>Stringing Me Along</h1>
    <form action = "string_length.php" method = "GET">
    	Enter some text here: <input type = "string" name = "string_1"><br />
    	<input type = "submit" value = "String Theory">
    </form>

    <h1>The Average-vengers</h1>
    <form action = "averages.php" method = "GET">
    	Enter numbers to be averaged here, separated by a space (e.g. 4 5 8): <input type = "string" name = "list_o_nums"><br />
    	<input type = "submit" value = "Average 'em">
    </form>

    <h1>Testing My Patience</h1>
    <form action = "auto_grader.php" method = "GET">
    	Exam grades, separated by a space: <input type = "string" name = "exam_grades">
    	<input type = "submit" value = "calculate grade">
    </form>
    
    <h1>FizzBuzz Lightyear</h1>
    <form action = "fizz_buzz.php">
    	Click here.
    	<input type = "submit" value = "Go">
    </form>

    <h1>Large Numbers</h1>
    <form action = "madeuplandia.php">
    	Click here.
    	<input type = "submit" value = "Go">
    </form>

    <h1>Even Larger Numbers</h1>
    <form action = "fibon.php">
    	Click here.
    	<input type = "submit" value = "Go">
    </form>

</body>

</html>