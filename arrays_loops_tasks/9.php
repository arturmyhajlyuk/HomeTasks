<?php
echo "С помощью оператора WHILE".PHP_EOL;
$i = 1;
while ($i <= 100)
echo $i++.PHP_EOL;

echo "С помощью оператора DO_WHILE".PHP_EOL;
$t = 1;
do {echo $t++.PHP_EOL;}
while ($t > 1 && $t <= 100);

echo "С помощью оператора FOR".PHP_EOL;
for ($n=1; $n <= 100; $n++)
    echo $n.PHP_EOL;

/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 16.01.2017
 * Time: 21:37
 */