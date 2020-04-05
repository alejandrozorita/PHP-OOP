<?php

namespace IteracionObjetos;

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

        echo "<p>{$this->name} tiene {$total} alimentos</p>";

        foreach ($this->lunch as $food) {
            echo "<p>{$this->name} come {$food}!</p>";
        }
    }

}