<?php

namespace ObjectTrait;

require "../vendor/autoload.php";


trait BasicActions
{
    public function move()
    {
        echo "<p>Moverse</p>";
    }

}


trait CanShootArrowa
{
    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
    }


    public function getArrows()
    {
        return $this->arrows ?? 50;
    }

    abstract public function getMaxArrow();

}


trait CanRide
{
    public function move()
    {
        echo "<p>Cabalgó</p>";
    }

}


class Arquero
{
    use BasicActions, CanShootArrowa;


    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
    }

    public function getMaxArrow()
    {

    }

}


class ArqueroCaballo
{

    use CanRide, CanShootArrowa;

    public function getMaxArrow()
    {

    }
}


/*
class ArqueroCaballo
{
    use BasicActions, CanRide {
        CanRide::move insteadof BasicActions;
        CanRide::move as ride;
        BasicActions::move as andar;
    }
    use CanShootArrowa;
}
*/

$arquero = new Arquero();
$arquero->move();
$arquero->shootArrow();

$arqueroCaballo = new ArqueroCaballo();
$arqueroCaballo->move();
echo "<p>{$arqueroCaballo->getArrows()}</p>";