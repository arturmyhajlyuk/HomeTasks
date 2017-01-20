<?php
$a = [2,3,4,5,6,7,8,9];
$b = [1,2,3,4,5,6,7,8,9];
foreach ($a as $value){
    foreach ($b as $value1)
        echo "$value * $value1 = ".$value*$value1.PHP_EOL;
    if ($a = 9)
        echo "---------------\n";}
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 16.01.2017
 * Time: 23:42
 */