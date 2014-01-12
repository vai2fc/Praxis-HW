<!DOCTYPE html>
<html>

<body>
	<?php
		$digit = 1;
		$fibonacci_digit = [0,1];
		$fibonacci_sum = 0;
		
		while ($fibonacci_digit[$digit] <= 4000000) {
			$digit = $digit +1;
			$fibonacci_digit[$digit] = $fibonacci_digit[$digit - 1] + $fibonacci_digit[$digit - 2];
			if ($fibonacci_digit[$digit] % 2 == 0) {
				$fibonacci_sum = $fibonacci_sum + $fibonacci_digit[$digit];
			};
		}
		
		echo "A very large number is $fibonacci_sum";
	?>
</body>
</html>