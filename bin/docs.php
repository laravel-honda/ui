<?php

require __DIR__ . '/../vendor/autoload.php';

$generator = new \Honda\Ui\Generator\Generator(
    __DIR__ . '/../docs'
);

$generator->whenPageCreated(function ($page) {
dump($page);
})->startGeneration();
