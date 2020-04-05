<?php

namespace MetodosMagicosSleepWakeUp;

require "../vendor/autoload.php";

use MetodosMagicosSleepWakeUp\User;

$user = new User(['name' => 'Alejandro']);

echo serialize($user);

