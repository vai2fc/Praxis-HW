<!DOCTYPE html>
<html>

<body>
	<?php
    $number_1 = $_GET['number_1'];
    $number_2 = $_GET['number_2'];  
    function multiply($number_1, $number_2) {
        return ($number_1 * $number_2);
    }

    echo "Your result is: " . multiply($number_1, $number_2);
?>

</body>

</html>