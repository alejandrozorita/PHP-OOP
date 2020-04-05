<?php


namespace MetodosMagicos;


class UnaClase
{

    public function __call($metodo, array $args)
    {
        echo var_dump($metodo, $args);
    }

    public function __callStatic($metodo, array $args)
    {
        var_dump($metodo, $args);
    }


}