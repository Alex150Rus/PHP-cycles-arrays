<?php

$mass = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'yе', 'ё' => 'е',
    'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
    'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' =>'shch', 'ь' => '',
    'ъ' => '', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

$str = 'я меняю только маленькие буквы, большие прописывать - лень!';
echo "$str<br>";

transliterator($str, $mass);

function transliterator ($string, $arrayOfLetters) {
    foreach ($arrayOfLetters as $key => $value) {
        $string = str_replace($key, $value, $string);
    }

    echo $string;
}


/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 29.11.2018
 * Time: 9:58
 */