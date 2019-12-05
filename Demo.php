<?php
//insertion sort for string array program.
function insertion($arr, $len)
{
   for ($i = 1; $i < $len; $i++) {
      $key = $arr[$i];
      $j = $i - 1;
      while ($j >= 0 && $arr[$j] > $key) {
         $arr[$j + 1] = $arr[$j];
         $j = $j - 1;
      }
      $arr[$j + 1] = $key;
   }
   //print sorted array list.
   for ($i = 0; $i < $len; $i++) {
      echo $arr[$i] . " ";
      echo "\n";
   }
}
//create array here.
$arr = array('dipak', 'lalit', 'pandit', 'ajay', 'ganesh', 'mahesh');
$len = sizeof($arr);
insertion($arr, $len);
?>