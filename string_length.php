<!DOCTYPE html>
<html>

<body>
	<?php
    
    $string_1 = $_GET['string_1']; 
    
    function string_length($string_1) {
        return strlen($string_1);
    }
    
    function string_reversal($string_1) {
    	return strrev($string_1);
    }

    function explode_sentence($string_1) {
    	$words = explode(" ", $string_1);
    	return $words;
    }
    
    $string_length = string_length($string_1);
    $string_reversal = string_reversal($string_1);
    $stringy_words = explode_sentence($string_1);
 
    echo "Your sentence is $string_length characters long and backwards it spells: $string_reversal.<br />";
    
    echo "Here is a list of the words in your sentence: <br />";
    
    foreach ($stringy_words as $words):
    	echo "<li>$words</li>";
    endforeach;

   $longest_word_length = 0;
    $longest_word = '';

    	foreach ($stringy_words as $word):
            if (strlen($word) > $longest_word_length) {
            	$longest_word_length = strlen($word);
            	$longest_word = $word;
            };
        endforeach;
    
    echo "The longest word is: $longest_word.";
    ?>

</body>

</html>