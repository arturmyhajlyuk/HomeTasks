<?php
$a=78;
$b=0;
$operator='/';
$result='';
if ($b==0 && $operator=='/')
{
    echo "на 0 делить нельзя";
}
else
    {
        if ($operator == '+')
        {
            $result = $a + $b;
        }
        if ($operator == '-')
        {
            $result = $a - $b;
        }
        if ($operator == '/')
        {
            $result = $a / $b;
        }
        if ($operator == '*')
        {
            $result = $a * $b;
        }
        if ($operator == '%')
        {
            $result = $a % $b;
        }
    echo $result;
}
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 11.01.2017
 * Time: 20:26
 */