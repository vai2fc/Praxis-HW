<!DOCTYPE html>
<html>

<body>
	<?php
    
    $list_o_nums = $_GET['list_o_nums'];

    function make_array($list_o_nums) {
        $nums = explode(" ", $list_o_nums);
        return $nums;
    }

    $array_o_nums = make_array($list_o_nums);

    function average($array_o_nums) {
        $numerator = array_sum($array_o_nums);
        $denominator = count($array_o_nums);
        return $numerator/$denominator;
    }

    $goddamn_average = average($array_o_nums);

    echo "The average of your numbers is $goddamn_average.";
    ?>

</body>

</html>