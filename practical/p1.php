<?php
    
    $arr = array(10,45,23,67,12,89,5);
    $max = $arr[0];
    $n = count($arr);
    for($i =1; $i < $n ; $i++){
        if($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    echo "The biggest number is : ".$max;
?>