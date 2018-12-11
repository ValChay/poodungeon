<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 06/12/18
 * Time: 16:52
 */

namespace POE\database;

use POE\entity\Character;

class CharacterFactory
{
    const TYPES = [
            'warrior' => [
                'life' => 200,
                'energy' => 100,
                'attack' => 25,
                'defense' => 25
            ],

            'thief' => [
                'life' => 100,
                'energy' => 100,
                'attack' => 20,
                'defense' => 23
            ],
            'wizard' => [
                'life' => 100,
                'energy' => 100,
                'attack' => 15,
                'defense' => 10
            ],
            'goule' => [
                'life' => 45,
                'energy' => 30,
                'attack' => 20,
                'defense' => 5
            ]
        ];


    /**
     * CharacterFactory constructor.
     */
    public function generate($name, $type): Character
    {

        /*
         * Détection d'une situation inhabituelle
         * Si le type de personnage est non connu le générateur n'esst pas capable
         * de créer le nouvel objet
         * On lance une execption on dit aussi lever une execption*/
        $character = new Character();
        $character->SetName($name);
        // pas de else quand il y un terme qui tue l'instruction
        if (!key_exists($type, self::TYPES)) {
            throw new \Exception('Type of character' . $type . 'does not exist');
        }
        $character->setLifeMax(self::TYPES[$type]['life']);
        $character->setLifeCurrent(self::TYPES[$type]['life']);
        $character->setEnergyMax(self::TYPES[$type]['energy']);
        $character->setEnergyCurrent(self::TYPES[$type]['energy']);
        $character->setAttack(self::TYPES[$type]['attack']);
        $character->setDefense(self::TYPES[$type]['defense']);

        return $character;
    }
}