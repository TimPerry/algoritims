<?php

function  insertionSort($arr, $arrLen) {
    for($i=1; $i<$arrLen; $i++){
        $current = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $current) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $current;
        fputs(STDOUT, implode(" ", $arr) . "\n");
    }
}

$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $arrLen);
$arr = explode(' ', fgets($fp));
for($i=0; $i<$arrLen; $i++){
    $arr[$i] = (int) $arr[$i];
}

insertionSort($arr, $arrLen);
