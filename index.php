<?php

$courses = ['javascript', 'php'];

$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

// var_dump(array_diff($wishes, $courses));

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
var_dump(array_diff($arrayB, $arrayA));

// Función que muestra las diferencias entre dos array con base
// en los valores y los keys
// Si el mismo array tiene dos o más llaves idénticas, sólo considera la última

$courses = ['Frontend' => 'javascript', 'Backend' => 'php'];
echo 'Courses <br>';
var_dump($courses);
$wishes = ['Backend' => 'php', 'Framework' => 'laravel', 'Frontend' => 'javascript', 'Framework' => 'vuejs'];
echo 'Wishes <br>';
var_dump($wishes);
var_dump(array_diff_assoc($wishes, $courses));


$array1    = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2    = array("a" => "green", "z" => "yellow", "z" => "red", "z" => "orange");
$resultado = array_diff_assoc($array1, $array2);
var_dump($resultado);

$resultado = array_diff_assoc($array2, $array1);
var_dump($resultado);
