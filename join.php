<?php 
function joinWords(array $myArray, string $separator = " ") : string {
    $result = ""; 
    for ($i = 0; $i < count($myArray)-1; $i++) {
        $result .= $myArray[$i];
        $result .= $separator;    
    }
    $result .= $myArray[count($myArray)-1]; 
    return $result; 
}
?>