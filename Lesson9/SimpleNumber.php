<?php
$NumberPos = 10001;
$simpleNumbers = [2];
$currentNumber = 1;

while(count($simpleNumbers) < $NumberPos){
    $currentNumber += 2;
    foreach ($simpleNumbers as $simpleNumber){
        if($currentNumber % $simpleNumber == 0)
            continue 2;
    }
    $simpleNumbers[] = $currentNumber;
}

echo "{$NumberPos}-е простое число равно {$simpleNumbers[count($simpleNumbers)-1]}";

// 10001-е простое число равно 104743
