<?php
 
    $numbers = array(37, -5, 10, -7, -18);

    if (!empty($numbers)) {
        $absoluteValues = array_map('abs', $numbers);

        $minAbsoluteValue = min($absoluteValues);
        echo "The minimum absolute value is: " . $minAbsoluteValue;
    } 
    else {
        echo "Please enter a valid list of numbers.";
    }

?>

