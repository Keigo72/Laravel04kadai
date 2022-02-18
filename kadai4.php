<?php

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        //$max_numberより$aが大きい場合は、$max_numberを再定義する
        if($max_number <= $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array([0, 2, 16, 8, 11]);

?>