<?php
function manageMovements($movements) : array{
    $instructions = array();
    $lastMovement = '';
    for ($i = 0; $i < strlen($movements); $i++) {
        $currentMovement = $movements[$i];
        if ($currentMovement == $lastMovement) {
            switch ($currentMovement) {
                case 'R':
                    $instructions[] = 'RIGHT AGAIN';
                    break;
                case 'L':
                    $instructions[] = 'LEFT AGAIN';
                    break;
                case 'F':
                    $instructions[] = 'FRONT AGAIN';
                    break;
                case 'B':
                    $instructions[] = 'BACKWARDS AGAIN';
                    break;
                default:
                    break;
            }
        } else {
            switch ($currentMovement) {
                case 'R':
                    $instructions[] = 'RIGHT';
                    break;
                case 'L':
                    $instructions[] = 'LEFT';
                    break;
                case 'F':
                    $instructions[] = 'FRONT';
                    break;
                case 'B':
                    $instructions[] = 'BACKWARDS';
                    break;
                default:
                    break;
            }
        }
        $lastMovement = $currentMovement;
    }
    return $instructions;
}
?>