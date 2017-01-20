<?php
//Может много кода, но это все что я смог придумать
$arrayAll = [];
$arrayTmp = null;                      //пустое значение. Важно!!! так как заносится значение 0 которое потом при произведении дает 0
$sumTmp = null;                        //пустое значение. Важно!!! так как заносится значение 0 которое потом при произведении дает 0
for ($i = 0 ; $i < 100; $i++)
{
    $arrayAll[$i] = mt_rand(1, 5);
}
print_r($arrayAll);
echo "Элементы с парными индексами ";
for ($j = 0; $j < count($arrayAll); $j += 2)
{
    $arrayTmp .=$arrayAll[$j];
    echo "$arrayAll[$j]";
}
$arrayTmp = str_split($arrayTmp);
for ($i = 0; $i < count($arrayTmp); $i++)
{
    $sumTmp = array_product($arrayTmp);
}
echo "\nПроизведение элементов с парными индексами = $sumTmp";
echo "\nЭлементы с не парными индексами ";
$arrayTmp= null;                                       //опустошение предыдущего значение arrayTmp.  Важно!!! (если используем те же переменные)
$sumTmp = null;                                        //опустошение предыдущего значение sumTmp   Важно!!!
for ($t = 1; $t < count($arrayAll); $t += 2)
{
    $arrayTmp .=$arrayAll[$t];
    echo "$arrayAll[$t]";
}
$arrayTmp = str_split($arrayTmp);
for ($u = 0; $u < count($arrayTmp); $u++)
{
    $sumTmp = array_product($arrayTmp);
}
echo "\nПроизведение элементов с не парными индексами = $sumTmp";

