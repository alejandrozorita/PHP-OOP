<?php

namespace ComposerComponentesTerceros;

use Carbon\Carbon;

class User extends Model
{
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }


    public function getAgeAttribute()
    {
        $date = Carbon::createFromFormat('d/m/Y', $this->birthDate);

        return $date->age;
    }

}