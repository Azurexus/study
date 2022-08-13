<?php
function summ($a, int $b = 0){
    $result = 0;
    if($a == is_string($a) && $b == is_string($b)) {
        $result = $a . $b;
    }elseif($a != is_string($a) && $b == is_string($b)){
        $result = 'тип переменной $a отличается от типа переменной $b';
    }elseif($a == is_string($a) && $b != is_string($b)){
        $result = 'тип переменной $a отличается от типа переменной $b';
    }
    else {
        $result = $a + $b;
    }
    return $result;
}
echo(summ(3, '4'));