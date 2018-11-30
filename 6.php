<?php

$menuPoints = [
'Домащняя страница', 'Одежда', 'Обувь', 'Контакты', 'Обратная связь'
];

foreach ($menuPoints as $key => $value) {
    $menuPoint .= "<li>$value</li>";
}

$megaMenuPoints = [
    'Домащняя страница', 'Одежда' => ['Одежда','мужская', 'женская', 'детская'],
    'Обувь', 'Контакты', 'Обратная связь'
];


foreach ($megaMenuPoints as $key => $value) {
    if (!is_array($value)) {
        $megaMenuPoint .= "<li>$value</li>";
        continue;
    }

    foreach ($value as $keyNew => $valueNew) {
        if ($keyNew === 1) {
        $megaMenuPoint .= "<ul><li>$valueNew";
        } elseif ($keyNew === count($value)-1) {
            $megaMenuPoint .= "<li>$valueNew</ul>";
        } elseif ($keyNew < count($value)-1) {
        $megaMenuPoint .= "<li>$valueNew";
        }
    }
}

$html = <<<php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
</head>
<body>

<ul>
  $menuPoint
</ul>

<ul>
  $megaMenuPoint
</ul>
</body>
</html>
php;

echo $html;

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 29.11.2018
 * Time: 11:49
 */