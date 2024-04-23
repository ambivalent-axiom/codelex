<?php
//$array = [];
//for($i=1;$i<=10;$i++){
//    array_push($array,$i);
//}

//foreach ($array as $key => $value) {
//    echo $value;
//}

//echo "\n";
//
//for($i=0;$i<=9;$i++){
//    echo $array[$i];
//}
//$x = 1;
//while ($x <= 10) {
//    echo "codelex_homeworks";
//    $x = $x + 1;
//}

$array = [1,2,3,4,5,6,7,8,9];
foreach ($array as $value) {
    if ($value % 3 == 0) {
        echo "$value" . "\n";
    }
}