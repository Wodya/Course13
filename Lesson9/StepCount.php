<?php
function binarySearch ( $myArray , $num, &$stepCount )
{
    $left = 0;
    $right = count($myArray) - 1;
    $stepCount = 0;
    while ($left <= $right) {
        $stepCount++;
        $middle = floor(($right + $left) / 2);

        if ($myArray [$middle] == $num) {
            return $middle;
        } elseif ($myArray [$middle] > $num) {
            $right = $middle - 1;
        } elseif ($myArray [$middle] < $num) {
            $left = $middle + 1;
        }
    }
    return null;
}
function getRandomArray(int $size, int $max) : array
{
    $arr=[];
    for ($i=0;$i<$size;$i++)
        $arr[] = random_int(1, $max);
    return $arr;
}
$length = 1000000;
$arr = getRandomArray($length,10000);
$find = $arr[random_int(1, $length-1)];

sort($arr);
$stepCount = 0;
$pos = binarySearch($arr, $find,$stepCount);

echo "Позиция {$pos}, количество шагов {$stepCount}";