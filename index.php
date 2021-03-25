<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('omedrano@gmail.com'));

var_dump(App\Validate::password('0123elonMusk'));