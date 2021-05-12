<?php
    $array =[
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($array[$i][$j] > $max ){
                $max = $array[$i][$j];
            }
        }
    }
    echo "max is: ".$max.
    " on array ".$i-1 .",".$j- 1;