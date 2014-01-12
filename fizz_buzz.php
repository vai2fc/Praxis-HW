<!DOCTYPE html>
<html>

<body>
	<?php

		foreach (range (0,100) as $num):
			if (($num % 3) == 0) {
				echo "Fizz";
			}
			if (($num % 5) == 0) {
				echo "Buzz";
			}
			if (($num % 3) != 0 and ($num % 5) != 0) {
				echo "$num";
			}
			echo "<br />";
		endforeach;
	?>
</body>
</html>