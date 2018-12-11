<?php

namespace POE\entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Character
 * @package POE\entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class Character{

    /**
     * id en bdd

    @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue()
     */
    private $name;

/**
* @var int
* @ORM\Column(type="integer", name="life_max")
*/
    private $lifeMax;
    /**
     * @var int
     * @ORM\Column(type="integer", name="life_current")
     */

    private $lifeCurrent;
    /**
     * @var int
     * @ORM\Column(type="integer", name="energy_max")
     */
    private $energyMax;
    /**
     * @var int
     * @ORM\Column(type="integer", name="energy_max")
     */
    private $energyCurrent;

    /**
     * @var int
     * @ORM\Column(type="integer", name="attack")
     */
    private $attack;
    /**
     * @var int
     * @ORM\Column(type="integer", name="defense")
     */
    private $defense;

    /**
     * @return mixed
     *
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
        return $this->lifeMax;
    }

    /**
     * @return mixed
     */
    public function getLifeCurrent()
    {
        return $this->lifeCurrent;
    }

    /**
     * @return mixed
     */
    public function getEnergyMax()
    {
        return $this->energyMax;
    }

    /**
     * @return mixed
     */
    public function getEnergyCurrent()
    {
        return $this->energyCurrent;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $lifeMax
     */
    public function setLifeMax($lifeMax): void
    {
        $this->lifeMax = $lifeMax;
    }

    /**
     * @param mixed $lifeCurrent
     */
    public function setLifeCurrent($lifeCurrent): void
    {
        $this->lifeCurrent = $lifeCurrent;
    }

    /**
     * @param mixed $energyMax
     */
    public function setEnergyMax($energyMax): void
    {
        $this->energyMax = $energyMax;
    }

    /**
     * @param mixed $energyCurrent
     */
    public function setEnergyCurrent($energyCurrent): void
    {
        $this->energyCurrent = $energyCurrent;
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

    public function wound(int $amount)
    {
        $this->lifeCurrent -= $amount;
        if(0 > $this->lifeCurrent){
            echo $this->getName().' est mort !!';
            throw  new \Exception("aaalkkldkdkldklmdlm");

        }
    }


}