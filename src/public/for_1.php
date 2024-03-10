<?php
$total = 0;
for($i = 0; $i < 5; $i++) {
  $total += $i;
  var_dump($total);
  echo '<br>';
}



// for文でループするたびに[$total]に$iを足していき、
// ループごとに足された後の[$total]をvar_dump()するコードを書きましょう。