<?php

namespace ObjetosInmutables;

class Food extends Model
{
    protected $bebida = false;


    public function getBebidaAttribute()
    {
        return $this->attributes[ 'bebida' ] ?? false;
    }

}