<?php
function isPangram(string $myString): bool {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $myString = strtolower($myString);
    for ($i = 0; $i < strlen($alphabet); $i++) {
        if (strpos($myString, $alphabet[$i]) === false) {
            return false;
        }
    }
    return true;
}
?>