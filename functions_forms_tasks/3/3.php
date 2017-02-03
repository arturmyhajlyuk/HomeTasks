<?php

function getNumber()
{
    $number = $_POST["number"];

    return $number;
}

function getData()
{
    $data = file_get_contents('text.txt');
    echo '<b>Исходный текст:</b>'.$data.'<br>';

    return $data;
}

function editData()
{
    $data1 = getData();
    $sep = '.';
    $result ='';
        foreach (explode($sep, $data1) as $key => $value)
        {
            $value = trim($value, ' .!?');
            $sep1=' ';
                foreach (explode($sep1, $value) as $key1 => $value1)
                {
                    $value1 = trim($value1, '.,!');
                        if (mb_strlen($value1) > getNumber())
                        {
                            $result .= '';
                        }
                        else
                    $result .= $value1 . ' ';
                }
        }
        echo '<b>'."Отредактированый текст:".'</b>';
        print_r($result);

    return $result;
}

save();
    function save()
    {
        file_put_contents('text1.txt', editData());

        return true;
    }
