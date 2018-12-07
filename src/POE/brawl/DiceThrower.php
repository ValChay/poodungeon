<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 07/12/18
 * Time: 12:04
 */

namespace POE\brawl;

class DiceThrower
{

    public function throwDice(int $sides = 6): int{

        return random_int(1,6);
}

}