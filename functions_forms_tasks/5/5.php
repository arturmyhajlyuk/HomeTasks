<?php
$dir = ($_POST['dir']);
$mask = ($_POST['mask']);

function getList($dir,$mask)
{
$i = glob("{$dir}{$mask}");
return $i;
}

print_r(getList($dir,$mask));