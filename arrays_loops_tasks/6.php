<?php
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$en = [];
$ru = [];
foreach ($arr as $key => $value)
{
    array_push($en, $key);
    array_push($ru, $value);
}
echo 'Английские названия'.PHP_EOL;
print_r ($en);
echo "-------------------------".PHP_EOL;
echo 'Руссские названия '.PHP_EOL;
print_r($ru);
    /**
 * Created by PhpStorm.
 * User: Артур
 * Date: 16.01.2017
 * Time: 20:16
 */