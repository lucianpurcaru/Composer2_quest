<?php

require __DIR__ . '/../vendor/autoload.php';

use Lucian\Composer2\Hello;

$hello = new Hello();
echo $hello->talk();