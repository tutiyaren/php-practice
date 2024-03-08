<?php
$food = 7;
$num = 0;
if($food % 2 == 0){
    $num = $food / 2;
}else{
    $num = ($food - 1) / 2;
    if($num >= 3){
        $num += 5;
    }else{
        $num += 6;
    }
}
echo $num;
