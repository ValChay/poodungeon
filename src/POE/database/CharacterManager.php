<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 07/12/18
 * Time: 10:41
 */

namespace POE\database;


class CharacterManager
{

    public function __construct(Connection $connection)
    {

        $this->connection = $connection->getConnection();

    }


    /**
     * CharacterManager constructor.
     */
    public function save(Character $character)
    {
        $statement= $this->connection->prepare('INSERT INTO characters 
        (name, life_max, life_current, energy_max, energy_current, defense, attack) VALUES (:name, :lmax, :lcurrent, :emax, :ecurrent, :def, :att)
         ');
/*        $statement->bindValue('name', $character->getName());
        $statement->bindValue('lmax', $character->getLifeMax());
        $statement->bindValue('lcurrent', $character->getLifeCurrent());
        $statement->bindValue('emax', $character->getEnergyMax());
        $statement->bindValue('ecurrent', $character->getEnergyCurrent());
        $statement->bindValue('def', $character->getDefense());
        $statement->bindValue('att',$character->getAttack());*/
      $statement->execute([
            'name' => $character->getName(),
            'lmax' => $character->getLifeMax(),
            'lcurrent' => $character->getEnergyCurrent(),
            'emax' => $character->getEnergyCurrent(),
            'ecurrent' => $character->getEnergyCurrent(),
            'def' => $character->getDefense(),
            'att' => $character->getAttack(),
        ]);

        try {
            $statement->execute();
        }
        catch (\PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}