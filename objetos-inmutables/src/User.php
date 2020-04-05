<?php

namespace ObjetosInmutables;

class User extends Model
{
    protected $lunch;


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->lunch = new LunchBox();
    }


    public function setLunch(LunchBox $lunch)
    {
        $this->lunch = $lunch;
    }


    public function eat()
    {
        if ($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} no tiene nada para comer!");
        }

        echo "<p>{$this->name} está comuniendo un {$this->lunch->shift()}!</p>";
    }


    public function eatMealt()
    {
        $total = $this->lunch->count();

        $food = $this->lunch->filter(function ($food) {
            return !$food->bebida;
        });

        $bebida = $this->lunch->filter(function ($food) {
            return $food->bebida;
        });

        echo "<p>{$this->name} tiene {$total} alimentos</p>";

        foreach ($food as $item) {
            echo "<p>{$this->name} come {$item->name}!</p>";
        }

        foreach ($bebida as $item) {
            echo "<p>{$this->name} bebe {$item->name}!</p>";
        }

    }

}