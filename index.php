<?php
// Array simple
$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

var_dump($courses);


foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}

echo '<br>';

foreach ($courses as $course) {
    echo "$course <br>";
}

function upper($course, $key)
{
    echo strtoupper($course) . ":" . strtoupper($key) . "<br>";
}

array_walk($courses, 'upper');

// A nivel llave
echo array_key_exists('frontend', $courses);
echo '<br>';
// A nivel valores
echo in_array('javascript', $courses);
echo '<br>';
// Imprimir keys
echo var_dump(array_keys($courses));
// Imprimir valroes
echo var_dump(array_values($courses));