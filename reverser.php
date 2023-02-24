<?php
function reverse(string $myString): string {
    return strrev($myString); 
}

function isPalindrome(string $myString): bool {
    if ($myString == strrev($myString)) {
        return true; 
    }
    return false;
}
?>