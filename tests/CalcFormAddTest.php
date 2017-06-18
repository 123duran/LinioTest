<?php
/**
 * Created by PhpStorm.
 * User: marcos.cardoso
 * Date: 17/06/2017
 * Time: 17:22
 */

namespace duran\PHP;
use PHPUnit\Framework\TestCase;


class CalcFormAddTest extends  TestCase
{

    private $_calcForm;


    public function setUp(){

        $this ->_calcForm = new CalcForm();
    }

    public function  testThree(){

        $this->assertEquals(0,$this->_calcForm->calcRemainder(3,3));
    }

    public function  testFive(){

        $this->assertEquals(0,$this->_calcForm->calcRemainder(5,5));
    }

    public function  testThreeOrFive(){

        $this->assertEquals(0,$this->_calcForm->addRemainder(0,0));
    }

    public function testNone(){

        $this->assertNotEquals(0,$this->_calcForm->calcRemainder(4,3));
        $this->assertNotEquals(0,$this->_calcForm->calcRemainder(7,5));
        $this->assertNotEquals(0,$this->_calcForm->addRemainder(1,0));
    }
}