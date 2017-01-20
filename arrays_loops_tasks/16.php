<?php
$arr =[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item)
{
    if ($item % 3) // если делится по модулю,
    {
        echo $item.", "; // то ставим запятую
    }
    else  // если не делится,
    {
        echo $item.PHP_EOL; // то новая строка
    }
}


/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 19:03
 */