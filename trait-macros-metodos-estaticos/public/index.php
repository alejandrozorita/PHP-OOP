<?php

namespace TraitMarcos;

require "../vendor/autoload.php";
require "../vendor/laravel/Macroable.php";
require "../vendor/laravel/HtmlLogger.php";


use Laravel\HtmlLogger;

HtmlLogger::macro('success', function ($message) {
    return "<p style=\"color:red\"=>{$message}</p>" . $this->hr();
});

$html = new HtmlLogger();

echo $html->hr();

echo $html->success('Todo salío bien');
