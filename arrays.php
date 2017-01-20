<?php
$items = [];
$items[] = 5;
$items [100] = 6;
$items [] = 9; // добавление в конец массива
var_dump($items);


//многомерный массив
$items['subarray'] = [
    10,
    12,
    ''
     ];
//другой способ записи многомерки
$items = [[], [], [12, 12,]];
print_r ($items);


// меню сайта
$items =
    [
        [
            'id' => 1,
            'url' => '/home',
            'title' => 'Home',
            'subitems' => [],
        ],
        [
    'id' => 2,
    'url' => '/categoriy-1',
    'title' => 'Category-1',
    'subitems' => [],
        ],
        [
    'id' => 3,
    'url' => '/category-2',
    'title' => 'Category-2',
    'subitems' => [],
        ],

];
print_r ($items);


//echo <\pre>; - vyvesti ishodnyj kod bez formatirovaniya

//var_dump ($items1, $items2); - основное отличие от print_r, то что он может выводить несколько переменных

//sortirovka
$items = [8,3,6,4,1,5,9,2,7];
sort ($items);
var_dump($items);
print_r ($items);
//sortirovka po klyuchu
$items = [1 => 3, '2' =>4, 0, 0 => 1, -1 => 5, '-10' => 5, 6,];
ksort ($items);
print_r($items);


//operacii nad masivami

//serialize
    $items = [1 => 3, '2' =>4, 0, 0 => 1, -1 => 5, '-10' => 5, 6,];
    $items=serialize($items);
print_r($items);

//deserialize

    $items=unserialize($items);
print_r($items);

//count
$items = [  0 => 1444, 40.00, '-10' => 5, 6, true];
$result = count($items);
print_r($result);

$items = [  0 => 1444, 40.00, '-10' => 5, 6, true];
$result = array_shift($items);
var_dump($result, $items);

//aray_push - dobalyaet neskolko elementov massiva (alternativa $items=[])
$items = [  1 => 12, 0 => 1444, 40.00, '-10' => 5, 6, true];
$result = array_push($items,44,55);
var_dump($result, $items);

//array_key_exists - proverka na nalichie zadanogo klyucha v massive
$items = [  1 => 12, 0 => 1444, 40.00, '-10' => 5, 6, true];
$result = array_key_exists(-100,$items); // tut zadayom znachenie "-100"
var_dump($result, $items);

//in_array - proverka na nalichie znachenie v massive
//$items = [  1 => 12, 0 => 1444, 40.00, '-10' => 5, 6, true];
//$items = [1 =>null, 2 => '123',]
//$result = in_array(123,$items, true); // tut zadayom znachenie "123" (!!!!!!!!!!!tut oshibka)
//var_dump($result, $items);

//array_unique - proverka na unikalnost,esli est sovpadenia, udalyaet
//$items = [1 => null, 2 => '123',123];
//$result = array_unique($items);
//var_dump($result, $items);

//array_compact !!!!!!!!!!!! pochitat obyazatelno

/* GLOBAL MASSIVE
$GLOBALS
$_ENV
$_SERVER
$COOKIE
$_SESSION
$_FILES
$_GET
$_POST
$_REQUIRE
$_REQUEST
*\
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 14.01.2017
 * Time: 10:26
 */