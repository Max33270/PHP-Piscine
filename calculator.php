<?php
function calc($calculation) : int {
    $result = eval('return '.$calculation.';');
    return intval($result);
}
?>
