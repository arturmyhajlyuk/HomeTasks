<?php
$result = 0;
$exp = 2;                                               //Тут указываем степень
foreach ([26, 17, 136, 12, 79, 15] as $item)
    $result += pow($item,$exp);
echo "Сумма квадратов элементов массива = " . $result;

/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 14.01.2017
 * Time: 23:05
 */