
<pre>

    <?php

    function getUpLetter($str, $encoding='UTF-8')
    {
        $str = preg_split('/(?<=\.)\s/ui', $str, -1, PREG_SPLIT_NO_EMPTY);

        //foreach ($arr as $key => $value)

           // $value = mb_strtoupper(mb_substr($value, 0, 1, $encoding), $encoding) . mb_substr($value, 1, mb_strlen($value), $encoding);

        return $str;
    }

    $str='мать. отец dog cat. ok';
    print_r(getUpLetter($str));

 ?>
</pre>