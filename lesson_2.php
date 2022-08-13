<?php

    $n = 5;
    
    $result = '';

    for ($i = 0; $n > $i; $i++){
        for ($j = $n;$j > $i;$j--){
            // $b .= 'o';
            echo '_';
        } 
        $result .= "*";
        $a = $result;
        echo $a;
        /* echo('<br>'); */
        /* echo($i); */
        // $k = 0;
        
        $result .= "*";
        
        for ($j = $n;$j > $i;$j--){
            // $b .= 'o';
            echo '_';
        } 
        
        echo "\n";
        
        /* echo($result); */
    }