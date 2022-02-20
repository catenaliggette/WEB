<?php

function Sum10(int $a, int $b) : bool{
    if($a+$b > 10)
        return true;
    else
        return false;
}
echo nl2br(var_export(Sum10(3,8)) . "\n");


function equal(int $a, int $b) : bool{
    if($a===$b)
        return true;
    else
        return false;
}
echo nl2br(var_export(equal(3,3)) . "\n");

$test = rand(0,1);
if ($test==0)
    echo $test == 0 ? nl2br("верно") : "";

echo nl2br("\n");


$age = 19;
if ($age < 10) {
    echo nl2br("Возраст меньше 10\n");
}
else if ($age > 99) {
    echo nl2br("Возраст больше 99\n");
}
else {
    $sum = $age / 10 + $age % 10;
    if ($sum < 10)
        echo nl2br("сумма цифр однозначна\n");
    else
        echo nl2br(" сумма цифр двузначна\n");
}

$arr = [1,2,2];
if(count($arr)===3){
    echo $arr[0] + $arr[1] + $arr[2];
}
