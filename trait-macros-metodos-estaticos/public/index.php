<?php

namespace TraitMarcos;

require "../vendor/autoload.php";
require "../vendor/laravel/HtmlLogger.php";

use Laravel\HtmlLogger;

$html = new HtmlLogger();

$html->addMethod('success', function ($message) {
    return "<p style=\"color:red\"=>{$message}</p>";
});

echo $html->hr();

echo $html->success('Todo salío bien');
