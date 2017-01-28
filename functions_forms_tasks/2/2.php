<pre>

    <?php
         include '2.html';

 function getCommonWords($str)
 {
     $separator = ' ';
     $arr = explode($separator, $str);
     $result = [];

     foreach ($arr as $word)
     {
         $result[$word] = mb_strlen($word);
     }
     arsort($result);
     return $result;

 }
//Через $_POST
//if (!empty($_POST['str'])) {
//    $str = $_POST['str'];
//
//$_GET

    $str = $_GET['str'];
    print_r(array_slice(getCommonWords($str), 0, 3));

 ?>
</pre>