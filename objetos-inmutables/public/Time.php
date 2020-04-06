<?php

namespace ObjetosInmutables;

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


$time = new Time();

echo "<p>Hoy es {$time}</p>";

$tomorrow = $time->tomorrow();
echo "<p>Mañana sera {$tomorrow}</p>";
echo "<p>Pasado mañana sera {$tomorrow->tomorrow()}</p>";

$yesterday = $time->yesterday();
echo "<p>Ayer fue {$yesterday}</p>";
echo "<p>Antes de Ayer fue {$yesterday->yesterday()}</p>";