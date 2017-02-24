
<p><a href="1.php">Главная</a> | <a href="2.php">Контакты</a>  | <a href="4.php">Форум</a></p>
<?php

if (!isset ($_COOKIE['gallery']))
{
    setcookie("gallery", 1 );
}
echo 'Gallery';

/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 23.02.2017
 * Time: 23:33
 */