<?php
function getRandomArray(int $size, int $max) : array
{
    $arr=[];
    for ($i=0;$i<$size;$i++)
        $arr[] = random_int(1, $max);
    return $arr;
}

$start = microtime(true);
$arr = getRandomArray(1000000,10000);
$sortArr = asort($arr);
echo 'Asort. Время ' . sprintf("%.9f", (microtime(true) - $start) / 100000) . 'с' . PHP_EOL;

$start = microtime(true);
$arr = getRandomArray(1000000,10000);
$sortArr = krsort($arr);
echo 'Ksort. Время ' . sprintf("%.9f", (microtime(true) - $start) / 100000) . 'с' . PHP_EOL;

$start = microtime(true);
$arr = getRandomArray(1000000,10000);
$sortArr = rsort($arr);
echo 'Rsort. Время ' . sprintf("%.9f", (microtime(true) - $start) / 100000) . 'с' . PHP_EOL;

$start = microtime(true);
$arr = getRandomArray(1000000,10000);
$sortArr = krsort($arr);
echo 'Ksort. Время ' . sprintf("%.9f", (microtime(true) - $start) / 100000) . 'с' . PHP_EOL;

$start = microtime(true);
$arr = getRandomArray(1000000,10000);
$sortArr = sort($arr);
echo 'sort. Время ' . sprintf("%.9f", (microtime(true) - $start) / 100000) . 'с' . PHP_EOL;

