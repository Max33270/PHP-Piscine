<?php
function capsMe(string $myString): string {
    return strtoupper($myString); 
}

function lowerMe(string $myString): string {
    return strtolower($myString); 
}

function upperCaseFirst(string $myString): string {
    return ucwords($myString); 
}

function lowerCaseFirst(string $myString): string {
   $lowerCasedWords = "";
    for ($i = 0; $i < strlen($myString); $i++) {
        if ($i == 0) {
            $lowerCasedWords .= strtolower($myString[$i]);
        } else if ($myString[$i] == " ") {
            $lowerCasedWords .= $myString[$i];
            $lowerCasedWords .= strtolower($myString[$i+1]);
            $i++;
        } else {
            $lowerCasedWords .= $myString[$i];
        }
    }
    return $lowerCasedWords;
}

function removeBlankSpace(string $myString): string {
    return trim($myString); 
}
?>

