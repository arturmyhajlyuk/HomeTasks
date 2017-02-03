<body>
<style type="text/css">

    img {
        border-radius: 10px;  }
    .part {
        font-style: Platino Linotype;
        font-size: 40pt;  }
</style>
<div>
<p class='part'>Gallery</p>
</div>

<?php
if (!empty($_FILES)) {
    $result = saveData($_FILES);
}

function saveData($files)
{
    $file = $files['image'];
    $uploadDir = __DIR__ . DIRECTORY_SEPARATOR . 'gallery' . DIRECTORY_SEPARATOR;
    $uploadFile = $uploadDir . basename($file['name']);
    $result = move_uploaded_file($file['tmp_name'], $uploadFile);

    return $result;
}

$dir = 'gallery/';
$cols = 3;
$files = scandir($dir);
echo "<table>";
$k = 0;
for ($i = 0; $i < count($files); $i++)
{
    if (($files[$i] != ".") && ($files[$i] != ".."))
    {
        if ($k % $cols == 0) echo "<tr>";
        echo "<td>";
        $path = $dir.$files[$i];
        echo "<a href='$path'>";
        echo "<img src='$path' class='img' alt='' width='150' />";
        echo "</a>";
        echo "</td>";
        if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
        $k++;
    }
}
echo "</table>";
?>
</body>