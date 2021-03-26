<?php

$courses = ['php', 'javascript', 'laravel'];

// Ordenar arrays
sort($courses);

var_dump($courses);

// Ordenar descendente
rsort($courses);

var_dump($courses);

$courses = [ 10 => 'php', 100 => 'javascript', 1000 => 'laravel'];

// Ordenar usando keys
ksort($courses);

var_dump($courses);

// Ordenar descendente usando keys
krsort($courses);

var_dump($courses);


// Retirar el primer elemento
var_dump(array_slice($courses, 1));

// Agrupar elementos dentro del array
var_dump(array_chunk($courses, 2));

// Eliminar el último elemento y retornarlo
var_dump(array_shift($courses));
echo '<br>';

// Eliminar el primer elemento y retornarlo
var_dump(array_pop($courses));
echo '<br>';

// Agrega un elemetno a la primer posición y retorna el tamaño del array
var_dump(array_unshift($courses, 'Java'));
var_dump($courses);

echo '<br>';
// Agrega un elemetno al final
var_dump(array_push($courses, 'Python'));
var_dump($courses);

$courses = [ 'backend' => 'php', 'frontend' => 'javascript'];

// Intercambia llaves y keys
var_dump(array_flip($courses));