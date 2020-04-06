<?php

namespace ComparacionObjetos;

require "../vendor/autoload.php";


class Time
{

    protected $time = NULL;


    public function __construct($time = NULL)
    {
        $this->time = $time ?? time();
    }


    public function __toString()
    {
        return date('d/m/Y H:i:s', $this->time);
    }


    public function tomorrow()
    {
        return new static($this->time + 24 * 60 * 60);
    }


    public function yesterday()
    {
        return new static($this->time - 24 * 60 * 60);
    }

}


$time = new Time(null, 'Europe/Londes');

$time2 = new Time(time() - 60);

$time3 = new Time(null, 'Europe/Amsterdam');

if ($time == $time3) {
    echo 'iguales';
} else {
    echo 'no iguales';
}