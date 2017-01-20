<?php
$userNumber = '442158755745';
$digit = 5;
if (is_numeric($userNumber))
{
    $arr = str_split($userNumber);
    $quantity = 0;
    for ($i = 0; $i < count($arr); $i++)
    {
     if ($arr [$i] == $digit)
        $quantity++;
    }
    echo " Количество вхождений цифры $digit в числе $userNumber = $quantity";
}
else
    echo "Введено не правильное значение!";



/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 19.01.2017
 * Time: 20:39
 */