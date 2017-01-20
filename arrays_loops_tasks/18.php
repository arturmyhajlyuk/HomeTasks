<?php
$arr=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
$weekend = ['суббота', 'воскресенье'];
foreach ($arr as $item)
{
    if (in_array($item,$weekend))
    {
        echo "<b> $item </b></br>";
    }
    else
    {
        echo "$item </br>";
    }
}
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 21:22
 */