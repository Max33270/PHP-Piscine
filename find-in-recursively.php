<?php
function findIn(string $key, array $array) : bool|string|int|float|array|object{
    if(array_key_exists($key, $array)){
        return $array[$key];
    }
    foreach ($array as $v) {
        if (is_array($v)) {
            $result = findIn($key, $v);
            if ($result) {
                return $result;
            }
        }
    }
    return false;
}
?>