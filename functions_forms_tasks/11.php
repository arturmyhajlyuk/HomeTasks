
<pre>

    <?php
         //include '9.html';
//tory lanez - LUV

   // function getUpLetter($str){
     //   $arr = preg_split('/\.\s/', $str, -1, PREG_SPLIT_NO_EMPTY);
//        //$text=mb_strtoupper(mb_substr($text,0,1)).mb_substr($text,1,strlen($text));//текст с заглавой буквы
        //for($i=0;$i<mb_strlen($text);$i++){
         //   if($text[$i]=='.'){
          //      $text[$i+2]=mb_strtoupper($text[$i+2]);
           // }
            //$b.=$text[$i];

    //    return $arr;

    function getUpLetter($str, $encoding='UTF-8')
    {
        $str = preg_split('/(?<=\.)\s/ui', $str, -1, PREG_SPLIT_NO_EMPTY);

        //foreach ($arr as $key => $value)

           // $value = mb_strtoupper(mb_substr($value, 0, 1, $encoding), $encoding) . mb_substr($value, 1, mb_strlen($value), $encoding);

        return $str;
    }

    $str='мать. отец dog cat. ok';// с русс не работает;
    print_r(getUpLetter($str));

 ?>
</pre>