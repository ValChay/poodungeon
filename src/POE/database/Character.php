<?php

namespace POE\database;

class Character{

    private $name;
    private $life_max;
    private $life_current;
    private $energy_max;
    private $energy_current;
    private $attack;
    private $defense;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLifeMax()
    {
        return $this->life_max;
    }

    /**
     * @return mixed
     */
    public function getLifeCurrent()
    {
        return $this->life_current;
    }

    /**
     * @return mixed
     */
    public function getEnergyMax()
    {
        return $this->energy_max;
    }

    /**
     * @return mixed
     */
    public function getEnergyCurrent()
    {
        return $this->energy_current;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $life_max
     */
    public function setLifeMax($life_max): void
    {
        $this->life_max = $life_max;
    }

    /**
     * @param mixed $life_current
     */
    public function setLifeCurrent($life_current): void
    {
        $this->life_current = $life_current;
    }

    /**
     * @param mixed $energy_max
     */
    public function setEnergyMax($energy_max): void
    {
        $this->energy_max = $energy_max;
    }

    /**
     * @param mixed $energy_current
     */
    public function setEnergyCurrent($energy_current): void
    {
        $this->energy_current = $energy_current;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack): void
    {
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense): void
    {
        $this->defense = $defense;
    }



}