
<pre>

    <?php
         //include '9.html';
//tory lanez - LUV
 function getRTS($str)
 {
     $arr = preg_split('//u',$str, -1, PREG_SPLIT_NO_EMPTY); //разбивает строку на символы без разделителя
     $arr = array_reverse($arr); //меняет значения в обратном порядке
     $arr = implode($arr); //склеивает назад в строку

     return $arr;
 }
    $str = $_GET['str'];
 echo "Cтрока наоборот:";
 print_r(getRTS($str));

 ?>
</pre>