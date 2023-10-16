<?php

require __DIR__ . '/../src/hello.php';

use App\hello;

$hello = new hello();
$hello->talk();
