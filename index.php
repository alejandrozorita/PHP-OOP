<?php


class Person
{
    protected $firstName;
    protected $lastName;
    protected $nikname;
    protected $changeNickname = 0;

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

     function getNikname()
    {
        return $this->nikname;
    }

    function setNikname($nikname)
    {
        if ($this->changeNickname >= 2) {
            throw new Exception("No puedes cambiar el nombre más de 2 veces");
        }

        $this->nikname = $nikname;
        $this->changeNickname++;

    }

}

$person1 = new Person("Alejandro", "Zorita");

$person2 = new Person("Alejandro2", "Zorita2");

$person1->setNikname("Alzort");$person1->setNikname("Alzort");
$person1->setNikname("Alzort");

echo "Hola {$person1->getFullName()} ({$person1->getNikname()}) eres amigo de {$person2->getFullName()}";

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