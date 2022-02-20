<?php

//Функции
function printStringReturnNumber() : int
{
    echo "help?";
    return 42;
}

$my_num = printStringReturnNumber();
echo " " . $my_num;