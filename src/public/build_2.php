<?php
$arrayList = [
	[3, 5, 1, 0, 9, 12],
	[1, 2, 14, 10, 9, 1],
	[0, 3, 4, 10, 20, 2]
];

foreach ($arrayList as $array) {
    // 配列内の3の倍数のみをフィルタリング
    $multiple = array_filter($array, function($num) {
        return $num % 3 === 0;
    });
    
    // 3の倍数がない場合はスキップ
    if (empty($multiple)) {
        continue;
    }

    // 3の倍数の中から最大値を見つける
    echo max($multiple) . '<br>';
}
