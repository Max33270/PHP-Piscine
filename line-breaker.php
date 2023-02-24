<?php
function breakLines($myString, $maxLen) : string {
    $lines = explode("\n",$myString);
    $result = '';
    foreach($lines as $line) {
        $words = explode(' ', $line);
        $temp = '';
        foreach($words as $word) {
            if(strlen($temp . $word) > $maxLen) {
                $result .= rtrim($temp) . "\n";
                $temp = '';
            }
            $temp .= $word . ' ';
        }
        $result .= rtrim($temp) . "\n";
    }
    return rtrim($result,"\n");
}
?>