<?php

// Función anónima
// Se usa en una variable que requiere lógica

use PhpParser\Node\Expr\ClosureUse;

$greet = function ($name) {
    return "Hola, $name";
};

echo $greet('Omar');

function greet2(Closure $lang, $name)
{

    return $lang($name);
}

$es = function ($name) {

    return "Hola, $name";
};

$en = function ($name) {
    return "Hi, $name";
};

echo '<br>';
echo greet2($es, 'Matic');
echo '<br>';
echo greet2($en, 'Tyrell');
echo '<br>';

function dateSeason(Closure $season, $date)
{
    return $season($date);
}

$spring = function($day){
    
    return "Hoy es $day y es Primavera";
};

$summer = function($day){
    
    return "Hoy es $day y es Verano";
};

$day = date("d-M-Y");

echo dateSeason($spring, $day);
echo '<br>';
echo dateSeason($summer, $day);