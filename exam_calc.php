<?php
        $exam_1
        $exam_2
        $exam_3

        function average($exam_1, $exam_2, $exam_3) {
        	return (($exam_1 + $exam_2 + $exam_3)/3)
        }

        $average = average($exam_1, $exam_2, $exam_3);
        echo $average

    ?>

    
    <?php
        $sentence = "The quick brown fox jumped over the lazy dogs."
        
        function explode_sentence($sentence) {
        	$words = explode(' ', $sentence);
        	return $words;
        }
        $splodeded = explode_sentence($sentence);
        <ul>
        <?php
            foreach ($splodeded as $words):
            <li>echo strlen($words)</li>
        ?>
            <li><?php echo $word;?></li>
        }
