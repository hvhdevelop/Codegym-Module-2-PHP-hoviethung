<?php

function binarySearch(array $numbers, int $needle): bool
{
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return true;
        }
    }
    return false;
}

 $numbers = range(1,10,2);
 $number  = 2;
 if(binarySearch($numbers,$number)) {
     echo "$number Found \n";
 }else {
     echo "$number Not found \n";
 }
