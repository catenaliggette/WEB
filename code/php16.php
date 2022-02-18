<?php

function increaseEnthusiasm(string $string) : string {
    return $string . "!";
}

function repeatThreeTimes(string $string) : string {
    return $string . $string . $string;
}

function cut(string $string, int $maxL = 10) : string{
    $length = min(strlen($string), $maxL);
    $stringNew = "";

    for ($i = 0; $i < $length ; $i++){
        $stringNew .= $string[$i];
    }
    return $stringNew;
}


function arrayPrint(array $r, int $i) {
    if ($i === count($r))
        return;
    echo $r[$i] . " ";
    arrayPrint($r , $i+1);
}

function sumNum(int $num) : int{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num /= 10;
    }

    if($sum > 9) {
       return sumNum($sum);
    }
    else {
        return $sum;
    }
}

$r=[1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9];

echo nl2br(increaseEnthusiasm("a") . "\n");
echo nl2br(repeatThreeTimes("Why") . "\n");
echo nl2br(increaseEnthusiasm(repeatThreeTimes("qwer")) . "\n");
echo nl2br(cut("heeeelp" , 4) . "\n");

arrayPrint($r , 0);
echo nl2br("\n");

echo (sumNum(1234));
