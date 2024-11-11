<?php

use Forseti\SegundoExercicio\PageObject\IndexPageObject;

require __DIR__ . '/../vendor/autoload.php';

$rc = new IndexPageObject();
$rh = $rc->getToken()->getTokenParser();
var_dump($rh);