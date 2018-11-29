<?php

$str = 'я меняю только маленькие буквы, большие прописывать - лень!';
echo "$str<br>";

spaceChanger($str);

function spaceChanger ($string) {

    $string = str_replace(' ', '_', $string);

    echo $string;
    return $string;
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 29.11.2018
 * Time: 9:58
 */