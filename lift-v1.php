<?php
function getFloor(int $currentFloor, ?int $requestedFloor, array $calledFloors) : ?int {
    if($requestedFloor !== null) {
        return $requestedFloor;
    }
    else {
        sort($calledFloors);
        if($currentFloor < $calledFloors[0]) {
            return $calledFloors[0];
        }
        elseif($currentFloor > $calledFloors[count($calledFloors) - 1]) {
            return $calledFloors[count($calledFloors) - 1];
        }
        else {
            for($i = 0; $i < count($calledFloors) - 1; $i++) {
                if($currentFloor > $calledFloors[$i] && $currentFloor < $calledFloors[$i + 1]) {
                    if(($currentFloor - $calledFloors[$i]) < ($calledFloors[$i + 1] - $currentFloor)) {
                        return $calledFloors[$i];
                    }
                    else {
                        return $calledFloors[$i + 1];
                    }
                }
            }
        }
    }
}

function getDirection(int $currentFloor, ?int $requestedFloor, array $calledFloors) : int {
    $nextFloor = getFloor($currentFloor, $requestedFloor, $calledFloors);
    if($nextFloor > $currentFloor) {
        return 1;
    }
    elseif($nextFloor < $currentFloor) {
        return -1;
    }
    else {
        return 0;
    }
}
?>