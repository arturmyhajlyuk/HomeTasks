<?php
$arr=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
$day = 'вторник';
foreach ($arr as $item)
    if ($day == $item)
        echo "<b>Текущий день: $day</b><br>";
    else
        echo "$item<br>";
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 21:38
 */