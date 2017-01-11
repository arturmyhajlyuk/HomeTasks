<?php
$s = 100;
$t = 2;
$v = $s / $t;
$v1= (($s / $t) * (5 / 18)); // (5/18) это (1000м/3600сек)
echo $v." км/час\n";
echo round($v1,1)." м/сек";
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 11.01.2017
 * Time: 0:53
 */
