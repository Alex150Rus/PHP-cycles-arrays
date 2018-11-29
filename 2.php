<?php

$a = 0;

while ($a < 11) {
    echo $a . '- ' . sayEvenOrNot($a) . '<br><br>';
    $a++;
}

function sayEvenOrNot($value){
    if ($value === 0) {
        return 'это ноль';
    } elseif ($value % 2 === 0) {
        return 'чётное число';
    } else {
        return 'нечётное число';
    }
};

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 29.11.2018
 * Time: 9:27
 */