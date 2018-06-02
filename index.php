<?php


class Person
{
    protected $firstName;
    protected $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function getFullName()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    function getFirstName()
    {
        return $this->firstName;
    }

    function getLastName()
    {
        return $this->lastName;
    }

    function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

}

$person1 = new Person("Alejandro", "Zorita");

$person2 = new Person("Alejandro2", "Zorita2");


$person1->setFirstName('11');

echo "Hola {$person1->getFullName()} eres amigo de {$person2->getFullName()}";

/*
// Este código estaría mal extructurado
// Usamos programación estructurada

$firstName = 'Alejandro';
$LastName = 'Zorita';

$fullName = fullName($firstName, $LastName);
function fullName($firstName, $LastName)
{
    return "$firstName $LastName";
}

$firstName2 = 'Alejandro2';
$LastName2 = 'Zorita2';

$fullName2 = "$firstName2 $LastName2";

echo "Hola $fullName, eres amigo de $fullName2";

*/