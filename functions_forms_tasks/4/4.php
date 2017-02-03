<?php

$dir = getDir($_POST['dir']);
function getDir($dir)
{
    if (is_dir($dir))
    {
        if ($dh = opendir($dir))
        {
            while (($file = readdir($dh)) !== false)
            {
                $files[] = $file;
            }
            sort($files);

        print_r($files);
        }
        closedir($dh);
    }
return $dir;
}







/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 30.01.2017
 * Time: 21:59
 */