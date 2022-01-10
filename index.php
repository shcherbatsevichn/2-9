<?php error_reporting(-1);
//В  массиве  А(N)  найти  максимальный  среди  четных  элементов  и  минимальный среди нечетных.  
$A = [1, 7, 4, 9, 8, 23, 17, 22, -199, 7];

$min = min_notcht($A);
$max = max_cht($A);
echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
echo("Максимальное четное число: {$max}. Минимальное нечетное: {$min}<br>");


function min_notcht($array){
    $minv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] % 2 != 0){
            if($array[$i] < $minv)
            $minv = $array[$i];
        }
    }
    return $minv;
}

function max_cht($array){
    $maxv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] % 2 == 0){
            if($array[$i] > $maxv){
                $maxv = $array[$i];
            }
        }
     
    }
    return $maxv;
}

