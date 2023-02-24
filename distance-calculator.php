<?php
class Geolocation
{
    public static function fromGeoPoints($lat1, $lon1, $lat2, $lon2)
    {
        $radius = 6371;
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $d = $radius * $c;
        return round($d, 1);
    }
}
$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032); // 333.1  

echo $calc;
?>