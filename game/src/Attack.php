<?php

namespace Game;


class Attack
{

    protected $damage;

    protected $magical;

    protected $descriptionKey;


    public function __construct($damage, $magical, $descriptionKey)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->descriptionKey = $descriptionKey;
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return Transaltor::get($this->descriptionKey, [
          'unit' => $attacker->getName(),
          'opponent' => $opponent->getName(),
        ]);
    }


    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param  mixed  $damage
     */
    public function isMagical()
    {
        return $this->magical;
    }

    /**
     * @return mixed
     */
    public function isPhysical()
    {
        return ! $this->isMagical();
    }

    /**
     * @param  mixed  $magical
     */
    public function setMagical($magical)
    {
        $this->magical = $magical;
    }

}
