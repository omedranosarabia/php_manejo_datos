<?php

    echo 'Un texto de una línea
    varias líneas
    comilla simple \' backslash \\ continuar con más texto
    $variable <br>';

    $name = 'Omar';
    echo '<br>';
    echo "Mi nombre es $name";
    echo '<br>';
    echo 'Mi nombre es ' . $name . '<br>';

    $courses = ['backend' => 'PHP'];


class User{

    public $name = 'Omar';
}
    
$user = new User;



//echo "$user->name quiere aprender $courses['backend']";

//Variables variables

$teacher = 'omar';

$omar = 'Profesor de PHP';

echo "$teacher es ${$teacher}";

function getTeacher(){

    return 'teacher';

}

$teacher = 'Omar';
echo '<br>';
echo "{${getTeacher()}} enseña PHP";