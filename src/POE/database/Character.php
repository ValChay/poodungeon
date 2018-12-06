<?php

namespace POE\database;

class Character{

    private $name;
    private $life_max;
    private $life_current;
    private $energy_max;
    private $energy_current;

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



}