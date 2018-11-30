<?php


echo"0 1 2 3 4 5 6 7 8 9 10<br>";
for ($i = 1; $i <=10; $i++){
    echo $i . ' ';

    for ($j = 1; $j <=10; $j++) {
        echo $i * $j . ' ';
    }
    echo '<br>';
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 30.11.2018
 * Time: 10:47
 */