<!DOCTYPE html>
<html>

<body>
	<?php
    $number_1 = $_GET['number_1'];
    $number_2 = $_GET['number_2'];  
   
    function compare($number_1, $number_2) {
        $result = 0
        if ($number_1 < $number_2) {
            $result = $number_1;	
        }
        elseif ($number_1 > $number_2) {
            $result = $number_2;
        }
        else {
            $result = "$number_1 and $number_2 are the same.";
        }
    }

    $comparison = compare($number_1, $number_2);
    echo $comparison;
?>

</body>

</html>