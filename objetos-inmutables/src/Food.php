<?php

namespace ObjetosInmutables;

class Food extends Model
{
    public function getBebidaAttribute()
    {
        return $this->attribute[ 'bebida' ] ?? false;
    }

}