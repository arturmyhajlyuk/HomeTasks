
<pre>
    <?php
    mb_internal_encoding('UTF-8');

    function getUpLetter(string $str) : string
    {
        $separator = '.';
        $result = '';

        foreach (explode($separator, $str) as $key => $part) //разбиваем текст на строки и заносим в массив
        {
            $part = trim($part); //обрезаем строку в массиве от лишних пробелов
            $result .= $part ? mb_UcFirst($part).$separator.' ' : ''; //формирование строки с помощью mb_UcFirst
        }

        return $result;
    }

    function mb_UcFirst($str) //замена маленькой буквы на заглавную, в каждом слове в начале предложения
    {
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
    }

    $str = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.
     а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

    print_r(getUpLetter($str));
    ?>
</pre>