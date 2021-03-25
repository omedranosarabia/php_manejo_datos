<?php

// Alterar
$text = "PHP es UN LENGUAJE año 2021, programación"; //slug

//echo strtolower($text);
//echo strtoupper($text);
//echo ucfirst($text);
// echo lcfirst($text);

// Reemplazar
$slug = str_replace(' ', '-', $text);

// echo strtolower($slug);

// Modificación

$code = 39;
// echo str_pad($code, 8, '#', STR_PAD_BOTH);
// echo '<br>';
// echo str_pad($code, 8, '#', STR_PAD_LEFT);
// echo '<br>';
// echo str_pad($code, 8, '#', STR_PAD_RIGHT);

// echo strip_tags($text);

echo strtoupper($text); //Elemento monobyte
echo '<br>';
echo mb_strtoupper($text); //Elemento multibyte