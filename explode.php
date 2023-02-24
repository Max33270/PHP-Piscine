<?php 
function explodeWords(string $myString, string $separator = " ", int $limit = PHP_INT_MAX) : array {
    $myArray = [];
    $words = "";
    $counter = 0;
    $counter2 = 0; 
    if (isNegative($limit) == true) {
        $negative = true; 
        $limit = PHP_INT_MAX;
    } else {
        $negative = false; 
    }
    if ($limit == 0) {
        $limit = 1; 
    } 
    while ($counter < strlen($myString)) {
        if ($myString[$counter] == $separator && $counter2<$limit-1) {
            $myArray[] = $words;
            $words = '';
            $counter2++; 
        } else {
            $words .= $myString[$counter]; 
        }
        $counter++; 
    }
    if ($negative == false) {
        $myArray[] = $words; 
    }
    return $myArray; 
}

function isNegative ($number): bool{
    if ($number <0){
        return true;
    } else {
        return false;
    }
}
?>