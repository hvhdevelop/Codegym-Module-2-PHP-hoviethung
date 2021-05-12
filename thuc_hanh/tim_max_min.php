<?php 
    function findMin($arr): int {
        $min    =   $arr[0];
   for ($i = 1; $i < count($arr); ++$i) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
                
            }
        }
        return $min;
    }
    $nums = [1,2,3,4,5,6];
    foreach ($nums as $num) {
        echo $num." ";
    }
    $minValue = findMin($nums);
    echo "</br>";
    echo "$minValue";