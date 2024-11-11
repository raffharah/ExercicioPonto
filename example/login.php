<?php

use Forseti\SegundoExercicio\PageObject\IndexPageObject;

require __DIR__ . '/../vendor/autoload.php';

$client = new IndexPageObject();
$html = $client->setUsuario('teste')->setSenha('teste')->getLogin()->getIterator()->current();

var_dump($html);