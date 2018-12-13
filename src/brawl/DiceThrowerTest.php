<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 13/12/18
 * Time: 15:14
 */

namespace POE\brawl;


use PHPUnit\Framework\TestCase;




class DiceThrowerTest extends TestCase
{

    private $thrower;
    public function setUp()
    {
      $this->thrower = new DiceThrower();
    }
    /**
     * Class DiceThrowerTest
     * @package POE\brawl
     * @dataProvider facesProvider
     */

    public function testThrowDice($faces){

$result = $this->thrower->throwDice($faces);
$this->assertLessThanOrEqual($faces,$result);
$this->assertGreaterThanOrEqual(1,$result);

}

public function facesProvider(){
        return [
            [10],
            [57],
            [1],
        ];
}
}