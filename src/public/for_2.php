<?php
$total = 0;
for($i = 0; $i < 15; $i++) {
  $total += $i;
}
var_dump($total);

// for文でループするたびに[$total]に$iを足していき、
// for文のループ終了後の[$total]の値をvar_dump()するコードを書きましょう。

// int(105)
