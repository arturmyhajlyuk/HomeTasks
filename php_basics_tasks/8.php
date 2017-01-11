<?php
$age = ',"№;%:?';
if (is_numeric($age))
{
    if ($age >= 18 && $age <= 59)
    {
        echo "Вам еще работать и работать";
    }
    if ($age > 59)
    {
        echo "Вам пора на пенсию";
    }
    if ($age >= 0 && $age <= 17)
    {
        echo "Вам еще рано работать";
    }
    if ($age < 0)
    {
        echo "Неизвестный возраст";
    }
}
else
{
    echo "Неизвестный возраст";
}
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 10.01.2017
 * Time: 23:56
 */