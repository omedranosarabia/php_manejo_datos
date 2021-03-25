<?php

$password1 = '123456a';
$password2 = '12345678910';
$password3 = '123456';

//Quiero una contraseña que contenga únicamente números
//Y que además contenga de 6 a 9 caracteres
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password1));
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password3));