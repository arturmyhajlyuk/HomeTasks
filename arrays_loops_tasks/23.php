
<?php
// первый способ, работает только с 3-х значным числом
$userNumber1 = 123;

if (is_numeric($userNumber1))
{
    $b = $userNumber1 % 10;
    $c = (int)($userNumber1 / 100);
    $d = (int)(($userNumber1 % 100) / 10);
    $sum1 = $b + $c + $d;
    echo "Решение 1: Сумма цифр = $sum1\n";
}
else
    echo "Введено не правильное значение!";

//второй способ через массив и for, работает с любым числом

$userNumber2 = '123456789';
if (is_numeric($userNumber2))
{
    $userNumber2 = str_split($userNumber2);
    $sum2 = 0;
    for ($i = 0; $i < count($userNumber2); $i++)
    {
        $sum2 += $userNumber2[$i];
    }
    echo "Решение 2: Сумма цифр = $sum2";
}
else
echo "Введено не правильное значение!";
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 17.01.2017
 * Time: 22:35
 */