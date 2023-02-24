<?php
function reverse(array $arr) : array {
    return array_reduce($arr, function($carry, $item) {
        array_unshift($carry, $item);
        return $carry;
    }, []);
}
function push(array &$arr, ...$item) : int {
    foreach($item as $value){
        $arr[] = $value;
    }
    return count($arr);
}

function sum(array $arr) : int {
    return array_reduce($arr, function($carry, $item) {
        return $carry + $item;
    }, 0);
}

function arrayContains(array $arr, $v): mixed {
    foreach($arr as $value){
        if($value === $v){
            return $value;
        }
    }
    return "Nothing";
}

function merge(array $arr1, array $arr2, array $arr3) : array {
    $result = [];
    foreach($arr1 as $value) {
        $result[] = $value;
    }
    foreach($arr2 as $value) {
        $result[] = $value;
    }
    foreach($arr3 as $value) {
        $result[] = $value;
    }
    return $result;
}
?>