<?php
$arrayList = [
    [3, 5, 1, 0, 9, 12],
    [1, 2, 14, 10, 19, 1],
    [0, 3, 3, 3, 7, 2]
];

foreach ($arrayList as $array) {
    echo max($array) . '<br>';
}