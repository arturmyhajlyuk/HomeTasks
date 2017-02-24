
<p><a href="1.php">Главная</a>  | <a href="3.php">Галерея</a> | <a href="4.php">Форум</a></p>

<?php
if (!isset ($_COOKIE['contacts']))
{
    setcookie("contacts", 1 );
}
echo 'contacts';
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 23.02.2017
 * Time: 23:33
 */