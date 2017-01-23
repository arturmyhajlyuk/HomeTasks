<?php
$rows = 20;
$cols = 20;
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$table = '<table border = "1">';

for ($tr = 1; $tr <= $rows; $tr++)
{
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++)
    {
        $i = $colors[rand(0,count($colors)-1)]; //!!! Отнимаем 1, так как индекс 0 имеет значение 'red'.
                                                //Если это не учитывать, то будет ошибка.
                                                // Получается, что тогда наш массив имеет 8 элементов, а не 7
        $table .= "<td style = 'background-color:{$i}'>". mt_rand(1,3000).'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table; //



//
/**
 * Created by PhpStorm.
 * User: Артурems
 * Date: 20.01.2017
 * Time: 0:57
 */