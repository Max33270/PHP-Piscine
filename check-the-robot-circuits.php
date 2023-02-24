<?php 
function checkCircuits($number) : array{
    $debugTable = array(
        2 => 'Left arm',
        3 => 'Right arm',
        5 => 'Motherboard',
        7 => 'Processor',
        11 => 'Zip Defluxer',
        13 => 'Motor'
    );
    $debugs = array();
    foreach ($debugTable as $prime => $debug) {
        if ($number % $prime == 0) {
            $debugs[] = $debug;
        }
    }
    return $debugs;
}
?>