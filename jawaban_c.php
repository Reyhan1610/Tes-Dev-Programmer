<?php

function count_and_sort_letters($input) {
    $counts = [];
    $input = str_split($input);

    foreach ($input as $letter) {
        if (!isset($counts[$letter])) {
            $counts[$letter] = 1;
        } else {
            $counts[$letter]++;
        }
    }

    uksort($counts, function($a, $b) {
        $a_lower = strtolower($a);
        $b_lower = strtolower($b);

        if ($a_lower != $b_lower) {
            return strcasecmp($a_lower, $b_lower);
        }

        return strcmp($a, $b);
    });

    return $counts;
}

$input = "Reyhan Alana";
$result = count_and_sort_letters($input);
print_r($result);

?>
