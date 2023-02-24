<?php
function myArrayFilter($arr, $callback = null) {
    $filteredArr = array();
    foreach ($arr as $key => $value) {
        if ($callback) {
            if (call_user_func($callback, $value, $key)) {
                $filteredArr[$key] = $value;
            }
        } else {
            if ($value) {
                $filteredArr[$key] = $value;
            }
        }
    }
    return $filteredArr;
}
?>