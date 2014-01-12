<!DOCTYPE html>
<html>

<body>
	<?php
    $numerator = $_POST['numerator'];
    $denominator = $_POST['denominator'];  

    function divide($numerator, $denominator) {   
        if ($denominator == 0) {
    	    $denominator = $numerator;
        }
        return ($numerator / $denominator);
    }
    echo divide($numerator, $denominator);
    ?>

</body>

</html>