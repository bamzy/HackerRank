<?php

$input = array(
    array(-2,-9),
    array(1,4)
);
mpow($input,1000);

function mpow($matrix,$power){
    if (is_null($matrix)){
        print_r("Input matrix was null\n");
        return false;
    }
    if (sizeof($matrix) != sizeof($matrix[0])){
        print_r("Input matrix does not square\n");
        return false;
    }
    $size = sizeof($matrix);
    $res = array();
    $res = $matrix;
//    echo $size;
//    print_arr($res);
    for ($counter=0;$counter<$power-1;$counter++) {
        $temp = array();
        for ($j = 0; $j < $size; $j++) {
            //print_r($res);
            for ($i = 0; $i < $size; $i++) {
                $sum = 0;
                for ($k = 0; $k < $size; $k++) {
                    $sum = $sum + $res[$j][$k] * $matrix[$k][$i];
                }
                $temp[$j][$i] = $sum;
//                print_arr($temp);
            }
        }
        $res = $temp;
//        print_arr($res);
    }
    print_arr($res);

}
function print_arr($input){
    for ($i=0;$i<sizeof($input);$i++){
        for ($j=0;$j<sizeof($input[$i]);$j++)
        {
            echo $input[$i][$j] . "  ";
        }
        echo "\n";
    }
    echo "\n";

}
?>
