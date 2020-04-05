<?php

namespace MetodosMagicosSleepWakeUp;

class User extends Model
{
    public function __toString()
    {
        return $this->name;
    }


    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }

}