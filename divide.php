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
    	echo "Why are you trying to divide by 0? Are you trying to break me? This is all you get: " . $numerator;
    }
    else {
    	echo "Your result is: " . divide($numerator, $denominator);
    };
?>

</body>

</html>