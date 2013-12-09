<!DOCTYPE html>
<html>

<body>
	<?php
		$name = $_GET['name'];
		$date = $_GET['date'];
		if ($date < 1900) {
			echo "top of the morning to you, $name!";
		}
		elseif ($date > 2020) {
			echo "Greetings, $name from not-distant future!";
		}
		else {
			echo "Yo, what's up, $name? Do you like <a href='http://www.reddit.com/r/aww/'>kittens</a>?";
		}
	?>
</body>

</html>