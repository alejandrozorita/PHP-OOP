<?php

namespace ArrayAcces;

require "../vendor/autoload.php";

$user = new User(
  [
    'first_name' => 'Walter',
    'last_name' => 'White',
    'birthDate' => '07/09/1959'
  ]
);

echo "<p>{$user->full_name} tiene {$user->age} años</p>";