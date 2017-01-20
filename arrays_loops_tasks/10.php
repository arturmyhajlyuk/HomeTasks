<?php
echo "С помощью оператора WHILE".PHP_EOL;
$i = 11;
while ($i <= 33)
    echo $i++.PHP_EOL;

echo "С помощью оператора DO_WHILE".PHP_EOL;
$t = 11;
do {echo $t++.PHP_EOL;}
while ($t > 11 && $t <= 33);

echo "С помощью оператора FOR".PHP_EOL;
for ($n=11; $n <= 33; $n++)
    echo $n.PHP_EOL;


/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 16.01.2017
 * Time: 21:59
 */