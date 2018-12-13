<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 13/12/18
 * Time: 16:20
 */

use PHPUnit\Framework\TestCase;
use POE\entity\Character;

class CharacterTest extends TestCase
{

    /**
     * @var Character
     */

    private $character;
public function setUp(){

    $this->character = new Character();
    $this->character->setCurrentLife(200);
}
    public function testWound()
    {


        $this->character->wound(100);

        $this->assertEquals(100, $this->character->getCurrentLife());
    }

    /**
     * Ne pas oublier de tester également la situation qui doiventlever des execptions
     * @throws \Exception
     * @expectedException Exception
     */
    public function testFatalWound()
    {
        $this->character->wound(300);
    }
}
