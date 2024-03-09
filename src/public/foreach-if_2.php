<?php
$examScoreLists = [
    ['japanese' => 30, 'math' => 30, 'english' => 30],
    ['japanese' => 35, 'math' => 41, 'english' => 90],
    ['japanese' => 89, 'math' => 40, 'english' => 60],
    ['japanese' => 70, 'math' => 70, 'english' => 30],
];

$resultList = [];
foreach ($examScoreLists as $examineeNum => $examScoreList) {
    $japanese = $examScoreList['japanese'] >= 35;
    $math = $examScoreList['math'] >= 40;
    $english = $examScoreList['english'] >= 31;

    if($japanese && $math && $english) {
        $resultList[] = $examineeNum + 1 . '番目の受験者は合格';
        continue;
    } 
    $resultList[] = $examineeNum + 1 . '番目の受験者は不合格';
}
echo implode('<br>', $resultList);

// 1番目の受験者は不合格
// 2番目の受験者は合格
// 3番目の受験者は合格
// 4番目の受験者は不合格

// japanese: 35点,　math: 40点,　english: 31点
