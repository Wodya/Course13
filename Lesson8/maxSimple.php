<?php
// Для числа 600851475143 наибольший простой делитель = 6857
$num = 600851475143;
$divider = [];

$start = microtime(true);
$divider = 2;
$dividers =[];

while ($num > $divider){
    while($num % $divider === 0){
        $num /= $divider;
        $dividers[] = $divider;
    }
    $divider++;
}
$dividers[] = $divider;

echo 'Максимальный простой делитель = ' . $divider. '<BR>' . PHP_EOL;
echo 'Все делители = ' . implode(", ", $dividers) . '<BR>' . PHP_EOL;

echo 'Время ' . sprintf("%.9f", (microtime(true) - $start) / 100000) . 'с';
var_dump($divider);
