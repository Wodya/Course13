<?php
// 2. Реализовать удаление элемента массива по его значению. Обратите внимание на возможные дубликаты!

function findBinaryMin(array $arr, int $find) : int
{
    $left = 0;
    $right = count($arr) - 1;
    while($left < $right){
        $middle = (int)floor(($right+$left)/2);
        if($arr[$middle] < $find)
            $left=$middle+1;
        else
            $right=$middle-1;
    }
    return $arr[$left]==$find? $left : $left+1;
}

$arr = [5,3,4,5,5,20,10,1,3,21];
$find = 5;

sort($arr);
$pos = findBinaryMin($arr,$find);
while($arr[$pos] === $find){
    unset($arr[$pos++]);
}
foreach ($arr as $item)
    echo $item . ' ';