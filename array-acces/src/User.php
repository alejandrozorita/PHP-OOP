<?php

namespace ArrayAcces;

use Carbon\Carbon;

class User extends Model
{

    public function getFullNameAttribute($value)
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    public function getAgeAttribute()
    {
        $date = Carbon::createFromFormat('d/m/Y', $this->birthDate);

        return $date->age;
    }

}