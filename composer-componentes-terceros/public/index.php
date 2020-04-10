<?php

namespace ComposerComponentesTerceros;

require "../vendor/autoload.php";

use ComposerComponentesTerceros\User;

$user = new User(
  [
    'name' => 'Walter White',
    'birthDate' => '07/09/1959'
  ]
);

echo "<p>{$user->name} tiene {$user->age} años</p>";