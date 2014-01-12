<!DOCTYPE html>
<html>

<body>
	<?php
    
    $exam_grades = $_GET['exam_grades'];

    function make_array($exam_grades) {
        $grades = explode(" ", $exam_grades);
        return $grades;
    }

    $exam_array = make_array($exam_grades);

    function average($exam_array) {
        $numerator = array_sum($exam_array);
        $denominator = count($exam_array);
        return $numerator/$denominator;
    }

    $goddamn_average = round(average($exam_array));
    $letter_grade = '';
    $pass_fail = '';

    if ($goddamn_average >= 90) {
        $letter_grade = "A";
        }
    elseif ($goddamn_average < 90 and $goddamn_average >= 80) {
        $letter_grade = "B";
        }
    elseif ($goddamn_average < 80 and $goddamn_average >= 70) {
        $letter_grade = "C";
        }
    elseif ($goddamn_average < 70 and $goddamn_average >= 60) {
        $letter_grade = "D";
        }
    else {
        $letter_grade = "F";
        };
    
    if ($goddamn_average >= 60) {
        $pass_fail = "passing";
    }

    else {
        $pass_fail = "failing";
    };

    echo "Exam grades are:";
    
    foreach ($exam_array as $exams):
        echo "<li>$exams</li>";
    endforeach;

    echo "The average of your exams is $goddamn_average. <br />";

    echo "Your grade is $letter_grade. <br />";

    echo "You are currently $pass_fail this class.";


    ?>

</body>

</html>