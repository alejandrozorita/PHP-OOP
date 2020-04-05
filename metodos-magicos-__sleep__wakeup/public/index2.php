<?php

namespace MetodosMagicosSleepWakeUp;

require "../vendor/autoload.php";

$data = file_get_contents('../storage/user.txt');

$user = unserialize($data);
echo $user->name;
var_dump($user);

