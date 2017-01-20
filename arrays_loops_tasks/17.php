<?php
$arr=['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь' ];
$month = 'июль';
foreach ($arr as $item)
    if ($month == $item)
        echo "<b>Текущий месяц: $month</b>".PHP_EOL.'<br>';
    else
        echo $item.PHP_EOL.'<br>';

/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 21:01
 */