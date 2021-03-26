<?php 

$frontend = [
    'Frontend' => 'javascript'
];

$backend = [
    'Backend' => 'php', 
    'Framework' => 'laravel'
];

var_dump($frontend + $backend);

$frontend = ['javascript'];

$backend = ['php', 'laravel'];

var_dump(array_merge($frontend, $backend));

$frontend = [
    'a' => 'javascript'
];

$backend = [
    'a' => 'php', 
    'b' => 'laravel'
];

var_dump(array_merge($frontend, $backend));

$frontend = [
    'a' => 'javascript'
];

$backend = [
    'a' => 'php', 
    'b' => 'laravel'
];

var_dump(array_merge_recursive($frontend, $backend));

$courses = ['javascript', 'php', 'laravel'];

$categories = ['front', 'back', 'framework'];

var_dump(array_combine($categories, $courses));