<?php

function pattern_count($text, $pattern) {
    $text_length = strlen($text);
    $pattern_length = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $text_length - $pattern_length; $i++) {
        $match = true;
        for ($j = 0; $j < $pattern_length; $j++) {
            if ($text[$i + $j] != $pattern[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }

    return $count;
}

$text = "abakadabra";
$pattern = "ab";
echo pattern_count($text, $pattern); 


?>
