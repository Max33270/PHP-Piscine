<?php
function f() {
    $addition = function($a, $b) {
        return $a + $b;
    };
    $subtraction = function($a, $b) {
        return $a - $b;
    };
    $multiplication = function($a, $b) {
        return $a * $b;
    };
    return [
        '+' => $addition,
        '-' => $subtraction,
        '*' => $multiplication
    ];
}
?>