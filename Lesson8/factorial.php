<?php
function factorial(int $n)
{
    $sum = 1;
    for($i=$n; $i>0; $i--){
        $sum*=$i;
    }
    echo $sum;
}

echo factorial(4);
