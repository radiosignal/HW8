<?php
require_once 'MathClass.php';


class MathTest extends PHPUnit\Framework\Testsuite{

    protected $fixture;
    protected function setUp()
    {
        $this->fixture = new MathClass();
    }
    /**
     * @dataProvider providerFactorial
     */
    public function testFactorial($a, $b)
    {
        $my = new MathClass();
        $this->assertEquals($b, $my->factorial($a));
    }
    public function providerFactorial()
    {
        return array (
            array (0, 1),
            array (2, 2),
            array (5, 120)
        );
    }
    protected function tearDown()
    {
        $this->fixture = NULL;
    }

}
