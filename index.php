<?php

$data = 'Estudio PHP';

//echo $data[0];

//$post = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus fuga dolor nobis blanditiis cumque, non nulla sequi itaque, quasi expedita totam commodi repellendus aperiam ea dolores aliquid, eveniet quisquam eos?";

//$extrac = substr($post, 0, 20);

//echo "$extrac... [ver más]";

/**
    $data = 'javascript, php, laravel'; //campo tags

    $tags = explode(',', $data); // array

    echo "<pre";
    var_dump($tags);
    echo "</pre"; 
 */

//$courses = ['javascript', 'php', 'laravel'];

//echo implode(', ', $courses);

$course = "     Curso de PHP   ";
$course = ltrim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
echo "</pre>";

$course = "     Curso de PHP   ";
$course = rtrim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
echo "</pre>";

$course = "     Curso de PHP   ";
$course = trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
echo "</pre>";
