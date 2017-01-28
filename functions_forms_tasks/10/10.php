
<pre>

    <?php
         //include '9.html';
//tory lanez - LUV

 function getUniqueWords($str)
 {
     $count=0;
     $sep = ' ';
     $arr = explode($sep, $str); //разбивает строку на слова
     $arr = array_count_values($arr); //подсчет количества совпадений
     foreach ($arr as $key => $value)
         if ($value==1){
         ++$count;
         }
     return $count;

 }
    $str = $_GET['str'];
 echo '<br>'."Заданая пользователем строка: $str".'<br>';
 echo "Количество уникальных слов:";
 print_r(getUniqueWords($str));

 ?>
</pre>