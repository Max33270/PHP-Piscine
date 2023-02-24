<?php
function findMaximumSubarray(array $array) : int | float {
    $max = 0;
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
        if ($sum > $max) {
            $max = $sum;
        }
        if ($sum < 0) {
            $sum = 0;
        }
    }
    return $max;
}
?>