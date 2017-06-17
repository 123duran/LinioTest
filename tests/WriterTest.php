<?php
/**
 * Created by PhpStorm.
 * User: marcos.cardoso
 * Date: 17/06/2017
 * Time: 17:10
 */

namespace duran\PHP;
use PHPUnit\Framework\TestCase;


class WriterTest extends TestCase
{
    private $_writer;
    private $_result;
    private $_calcFormAdd;

    public function prepare(){

        $this->writer = new Writer();
        $this->_result = new Result();
        $this->calcFormAdd = new CalcFormAdd();
    }


    public function testWriter(){

    }
}