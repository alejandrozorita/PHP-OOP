<?php

namespace ComparacionObjetos;

require "../vendor/autoload.php";


class Time
{

    protected $time = NULL;
    protected $timezone;


    public function __construct($time = NULL, $timezone = 'Europe/Londres')
    {
        $this->time = $time ?? time();
        $this->timezone = $timezone;
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

class MyTime extends Time {

}

$time = new Time(null, 'Europe/Londres');

$myTime = new MyTime(null, 'Europe/Londres');

if ($time == $myTime) {
    echo 'iguales';
} else {
    echo 'no iguales';
}
echo '<br>';
$time = new Time(null, 'Europe/Londres');

$time2 = new Time(null, 'Europe/Londres');

if ($time == $time2) {
    echo 'iguales';
} else {
    echo 'no iguales';
}