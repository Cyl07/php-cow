<?php

require_once __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// or just echo the object for direct output
echo $bessie;