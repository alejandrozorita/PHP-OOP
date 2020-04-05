<?php

namespace MetodosMagicosSleepWakeUp;

require "../vendor/autoload.php";

use MetodosMagicosSleepWakeUp\User;

$user = new User(['name' => 'Alejandro']);

$result = serialize($user);
var_dump($user);
file_put_contents('../storage/user.txt', $result);

