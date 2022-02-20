<?php

//a
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_match_all('#a..b#' , $str , $matches);
var_dump($matches);

echo nl2br("\n");

//b
$str = 'a1b2c3';
echo preg_replace_callback('#(\d+)#', 'cube' , $str);
function cube($matches)
{
   $matches[0] = $matches[0] ** 3;
   return $matches[0];
}
