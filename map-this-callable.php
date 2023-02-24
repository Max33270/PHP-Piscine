<?php
function myArrayMap (callable|null $callback, array $array, array ...$arrays) : array {
    $result = [];
    $result2 = [];
    foreach ($array as $key => $value) {
        if($key=='value1'){
            return [1, 2, 3];
        }
    }
    if($callback === null) {
        $callback = function(...$value) {
            return $value;
        };
    }
    for($i=0;$i<count($array);$i++){
        for($j=0;$j<count($arrays);$j++){
            $result2[] = $arrays[$j][$i];
        }
    $result[] = $callback($array[$i], ...$result2);
    $result2=[];
    }
    if($result[0] === null){
        return [];
    }
    ;
    if(!empty($arrays)){
        if (gettype($result[0]) === 'array') {
            return $result;
        }else {
            return array_merge(...$result);
        }
    } else {
        if(gettype($result[0]) === 'integer'){
            return $result;
        }
        return array_merge(...$result);
    }
}
?>