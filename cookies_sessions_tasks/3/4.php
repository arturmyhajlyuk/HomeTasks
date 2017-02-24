<?php
echo 'Ви відвідали наступні сторінки: ';

if (isset ($_COOKIE['main']))
{
    echo '<a href="1.php">Головна</a> | ';
}

if (isset ($_COOKIE['contacts']))
{
    echo '<a href="2.php">Контакты</a> | ';
}

if (isset ($_COOKIE['gallery']))
{
    echo '<a href="3.php">Галерея</a> | ';
}


/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 23.02.2017
 * Time: 23:33
 */