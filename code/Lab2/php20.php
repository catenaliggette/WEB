<?php

$r = [3,1,4,7,2];
echo nl2br("среднее арифметическое массива элементов: " . array_sum($r)/count($r) . "\n");

echo nl2br("сумма чисел от 1 до 100 = " . array_sum(range(1 , 100)) . "\n");

$r = [4, 9, 16, 25];
$array = array_map('sqrt' , $r);
printArray($array);
echo nl2br("\n");

$letters = range('a' , 'z');
$numbers = range(1 , 26);
$array = array_combine($letters , $numbers);
var_dump($array);
echo nl2br("\n");


$str = '1234567890';
$array = str_split($str, 2);
echo (array_sum($array));



function printArray(array $array){
    foreach ($array as $i){
        echo $i . " ";
    }
}
