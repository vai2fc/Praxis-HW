<!DOCTYPE html>
<html>

<body>
	<?php
		$year = 1;
		$population = [10,10];
		
		while ($year <= 100) {
			$year = $year +1;
			$population[$year] = $population[$year - 1] + $population[$year - 2];
			if ($year == 10) {
				echo "At year $year, the population will be $population[$year] people. <br />";
			};
			if ($year == 20) {
				echo "At year $year, the population will be $population[$year] people. <br />";
			};
			if ($year == 100) {
				echo "At year $year, the population will be $population[$year] people. <br />";
			};
		}
	?>
</body>
</html>