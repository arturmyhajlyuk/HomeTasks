<?php
// for
//for (expr1;expr3;expr3)
//statement

for ($i = 1; $i >= 10; $i++)
{
    echo $i;
}

for ($i =1, $j = 0; $i <=10; $j += $i, print $i, $i++);

//Vyvodim chetnye chisla

for ($i=1; $i <= 100; $i++)
{
    if($i % 2 === 0)
    echo $i.PHP_EOL;
}

//Vyvodim prostye chisla

for ($i = 1; $i <= 10; $i++) {
    $res = 0;
    for ($j = 1; $j <= $i; $j++)
    {
        if ($i % $j === 0)
        {
            $res++;
        }
    }
    echo $res <= 2; //dorabotat
}


//WHILE-preduslovie, snachala proveryaetsya uslovie, potom vyvoditsya resultat

//DO-WHILE - posleuslovie, pokazhet pervoe znacheniya, a potom budet proveryat

//FOREACH - perebor dlya massiva. Ne izmenyaet znacheniya v samom massive !!!!!!!!!!!!!
// esli my hotim vnesti izmeneniya obrashchaemsya po ssylke(foreach($arr as &$value))


//BREAK,CONTINUE,

    /**
 * Created by PhpStorm.
 * User: Артур
 * Date: 14.01.2017
 * Time: 12:30
 */