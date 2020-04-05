<?php

namespace MetodosMagicosSleepWakeUp;

class User extends Model
{
    public $id = 5;
    public $table = 'users';

    private $dbPassword = 'secret';

    public function __toString()
    {
        return $this->name;
    }

    public function __sleep()
    {
        return ['attributes'];
    }

    public function __wakeup()
    {
        $this->attributes['name'] = strtoupper($this->attributes['name'] );
    }

}