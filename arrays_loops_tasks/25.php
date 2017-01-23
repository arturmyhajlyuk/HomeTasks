<?php

// !!!нужно попробовать сортировку массива функция 'sort'. можно попробовать сделать по другому
$arr = [];
for ($i = 0; $i < 10; $i++)
{
    $arr[$i] = mt_rand(0, 100);
}
$min = min($arr); //минимальное значение в массиве
$max = max($arr); //максимальное значение в массиве
echo "Минимальное значение = $min\n";
echo "Максимальное значение = $max\n";
print_r($arr);
echo PHP_EOL;
foreach($arr as $key => $value)
{
    if($value == $min)
    {
        $arr[$key] = $max;
    }
    if($value == $max)
    {
        $arr[$key] = $min;
    }
}
print_r($arr);
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 19.01.2017
 * Time: 21:00
 */