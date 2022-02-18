<?php

function twice($num){
    //引数が数値または数値形式の文字列かどうかを検査し、数値の場合は2倍しリターンする
    return is_numeric($num) ? $num * 2 : '引数が数値ではありません' ;
}

echo twice(4);

?>