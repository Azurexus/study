<?php
include 'config.php';
// Вернет нам $array


/* foreach ($array as $value) {
    print_r ($value);
} */
foreach ($array as $value) {
    foreach($value as $key_2 => $item) {
        print_r($key_2. "\t\t"  .$item);
        echo "\n";
    }
    echo "\n";
}
