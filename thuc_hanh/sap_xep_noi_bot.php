<?php
 function selectSort($arr) {
     $count = count($arr);
     for ($i = 0; $i < $count; $i++) {
         for ($j = 0; $j < $count - $i - 1; $j++) {
             
         }
     }
 }

 function swap($arr,$num_1,$num_2) {
    $num_3          = $arr[$num_1];
    $arr[$num_1]    = $arr[$num_2];
    $arr[$num_2]    = $num_3;
    return $arr;
 }
 $myArray = [1,3,4,5,6,5645,6,43,324];
 echo "Original Array :\n";
 echo join(', ', $myArray);
 echo "<br>";
 echo "\nSorted Array :\n";
 echo implode(', ', selectSort($myArray));