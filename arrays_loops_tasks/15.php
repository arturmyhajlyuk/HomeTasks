<?php
// Количество элементов в массиве без использования функции count();
$count = 0;
$arr = [ 4, 2, 5, 19, 13, 0, 10];
    foreach ($arr as $item)
    $count ++;
echo "Количество элементов в массиве = ".$count;
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 18:54
 */