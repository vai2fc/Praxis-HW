<!DOCTYPE html>
<html>

<body>
	<?php
    $numerator = $_POST['numerator'];
    $denominator = $_POST['denominator'];  

    function divide($numerator, $denominator) {
        return ($numerator / $denominator);
        };   
    
    if ($denominator == 0) {
    	echo "Your result is: " . $numerator;
    }
    else {
    	echo "Your result is: " . divide($numerator, $denominator);
    };
?>

</body>

</html>