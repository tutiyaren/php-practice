<?php
$word = 'fuga';
for ($i = 1; $i <= 6; $i++) {
    if ($word == "hoge") {
        if ($i % 2 != 0) {
            echo "wordがhoge かつ " . $i . "は2の倍数以外です";
            echo '<br>';
            continue;
        } 
        echo "wordがhoge かつ " . $i . "は2の倍数です";
        continue;
    }
    if ($i % 2 != 0) {
        echo "wordがhogeでない かつ " . $i . "は2の倍数以外です";
        echo '<br>';
        continue;
    }
    echo "wordがhogeでない かつ " . $i . "は2の倍数です";
    echo '<br>';
}

// wordがhogeでない かつ 1は2の倍数以外です
// wordがhogeでない かつ 2は2の倍数です
// wordがhogeでない かつ 3は2の倍数以外です
// wordがhogeでない かつ 4は2の倍数です
// wordがhogeでない かつ 5は2の倍数以外です
// wordがhogeでない かつ 6は2の倍数です
