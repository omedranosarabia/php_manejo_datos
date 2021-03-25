<?php

// Valores
// function greet($name)
// {
//     return "Hola, $name";
// }

// echo greet('Omar');
// echo '<br>';

// Referencias
$course = 'PHP';
// El & convierte el parámetro a parámetro por referencia
function patch(&$course)
{
    $course = 'Laravel';
    echo $course;
}

patch($course);
echo '<br>';
echo $course;

// Predeterminado

function greet($name = 'Omar'){
    return "Hola, $name";
}
echo '<br>';
echo greet();
echo '<br>';
echo greet('Elon');

