<?php
    $array = [1,2,3,4,5,6];
    // thêm biến vào mảng
    array_push($array,7,8,9);
    //show mảng
    echo "<pre>";
    print_r ($array);
    echo "</pre>";
    
    //đếm mảng
    $count = 0;
    for($i = 0; $i < count($array); $i++) {
        $count += $array[$i];
    }
    echo $count;
    
?>