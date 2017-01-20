<?php
$arr=[4, 2, 5, 19, 13, 0, 10];
$check=[2,3,4];                                             //значения для поиска
$found = 'no';                                              //флаг (можно через true\false)
foreach ($arr as $item)
{
    if (in_array($item, $check))
    {
        $found = 'yes';                                     //если значение найдено, то флаг изменяется на 'yes'
        break;                                              //поиск прерывается
    }
}
if ($found == 'no')
    echo 'Нет заданых значений в массиве';
else
    echo 'Есть заданые значения в массиве';
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 1:43
 */