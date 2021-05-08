<?php
$arr2d = [
    [1121,32,21,23,12],
    [23,12,32,12],
    [12,32,12,54,165],
    [54,65,423,123215]
];
function findMax2d($arr) {
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr[$i]); $i++) {
        for ($j = 1; $j < count($arr[$j]); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo findMax2d($arr2d);