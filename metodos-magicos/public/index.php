<?php

namespace MetodosMagicos;

require "../vendor/autoload.php";
$node = HtmlNode::textarea('Alejandro')
    ->name('name')
    ->class('red');
echo $node->__toString();

var_dump($node('name'), $node('width'));