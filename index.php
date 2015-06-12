<?php

require_once('vendor/autoload.php');

Slade\Parser::$templatePaths = [__DIR__ . '/templates'];
Slade\Parser::$compiledPath  = './compiled';

$name = 'Evert';
$age = 24;
$foods = ['salmon', 'lasagne', 'meat'];

echo Slade\Parser::make('test.index', compact('name','age','foods'));