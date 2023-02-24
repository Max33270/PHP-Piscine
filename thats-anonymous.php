<?php
$today = function () {
    $today = date('F j, Y');
    return "It is $today";
};

$isLeapYear = function (int $year) : bool {
    return $year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0;  
}
?>