<pre>
 <?php
       // include '1.html';
             $str1 = $_GET['str1'];
                $str2 = $_GET['str2'];

 function getCommonWords($str1, $str2)
      {
$separator = ' ';
$arr1 = explode($separator, $str1);
$arr2 = explode($separator, $str2);
$result = [];

foreach ($arr1 as $word) {
if (in_array($word, $arr2)
&& !isset($result[$word]))
    {
        $result[$word] = $word;
    }
}
      return $result;
      }
 print_r(getCommonWords($str1, $str2));

 ?>
</pre>