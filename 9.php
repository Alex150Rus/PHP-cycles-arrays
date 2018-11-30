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

transliteratorSpaceChanger($str, $mass);

function transliteratorSpaceChanger ($string, $arrayOfLetters) {
    foreach ($arrayOfLetters as $key => $value) {
        $string = str_replace($key, $value, $string); $string= str_replace(' ', '_', $string);
    }

    echo $string;
    return $string;
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 30.11.2018
 * Time: 10:37
 */