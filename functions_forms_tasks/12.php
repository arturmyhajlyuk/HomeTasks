
<pre>
<?php
 mb_internal_encoding('utf-8');

$text = "А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.";


function makeRevers($text)
{
    $text = preg_split('/(?<=\.)\s/ui', $text, -1, PREG_SPLIT_NO_EMPTY);
    krsort($text);
    foreach ($text as $value)
    echo $value.' ';
        return  $text;
}
makeRevers($text);

 ?>
</pre