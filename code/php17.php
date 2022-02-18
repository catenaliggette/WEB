<?php

function printArray(array $array){
    foreach ($array as $i){
        echo $i . " ";
    }
}

function arrayFill(string $value, int $n) : array{
    $array = [];
    for ($i = 0; $i < $n; $i++){
        $array[$i] = $value;
    }
    return $array;
}


$r = [];
$n = 3;
for ($i = 0 ; $i < $n ; $i++){
    for ($j = 0 ; $j < $i+1 ; $j++){
        $r[$i] = $r[$i] . "x";
    }
}
printArray($r);
echo nl2br("\n\n");


$r = arrayFill('x' , 5);
printArray($r);
echo nl2br("\n\n");


$r = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($r as $arr){
    foreach ($arr as $value){
        $sum += $value;
    }
}
echo nl2br($sum . "\n\n");


$k = 0;
$r = [];
for ($i = 0; $i < 3; $i++){
    $sub = [];
    for ($j = 0; $j < 3; $j++){
        $k++;
        $sub[$j] = $k;
    }
    $r[$i] = $sub;
    printArray($sub);
    echo nl2br("\n");
}
echo nl2br("\n");


$r = [2,5,3,9];
$result = $r[0] * $r[1] + $r[2] * $r[3];
echo nl2br("result = " . $result . "\n\n");


$user = [
    "name" => "Dasha",
    "surname" => "Shcherbakova",
    "patronymic" => "nope"
];
echo nl2br($user['name'] . " " . $user['surname'] . " " . $user['patronymic'] . "\n\n");


$date = [
    "year" => "2022",
    "month" => "02",
    "day" => "18"
];
echo nl2br($date['year'] . "-" . $date['month'] . "-" . $date['day'] . "\n\n");


$arr =  ['a', 'b', 'c', 'd', 'e'];
echo nl2br(count($arr) . "\n");
echo nl2br($arr[count($arr)-1] . "\n");
echo nl2br($arr[count($arr)-2] . "\n");

