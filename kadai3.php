<?php

function multiply_nums($arr){
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
    echo $result;
}

echo multiply_nums([1, 3, 5, 7, 9]);

?>