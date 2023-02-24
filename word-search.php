<?php
function searchWord($board, $string) {
    $visited = array_fill(0, count($board), array_fill(0, count($board[0]), false));
    for ($row = 0; $row < count($board); $row++) {
        for ($col = 0; $col < count($board[0]); $col++) {
            if (dfs($board, $string, $visited, $row, $col, 0)) {
                return true;
            }
        }
    }
    return false;
}

function dfs($board, $string, &$visited, $row, $col, $index) {
    if ($index == strlen($string)) {
        return true;
    }
    if ($row < 0 || $row >= count($board) || $col < 0 || $col >= count($board[0]) || $visited[$row][$col] || $board[$row][$col] != $string[$index]) {
        return false;
    }
    $visited[$row][$col] = true;
    $result = dfs($board, $string, $visited, $row + 1, $col, $index + 1)
            || dfs($board, $string, $visited, $row - 1, $col, $index + 1)
            || dfs($board, $string, $visited, $row, $col + 1, $index + 1)
            || dfs($board, $string, $visited, $row, $col - 1, $index + 1);
    $visited[$row][$col] = false;
    return $result;
}

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];
?>