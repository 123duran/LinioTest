<?php
/**
 * Created by PhpStorm.
 * User: marcos.cardoso
 * Date: 17/06/2017
 * Time: 17:15
 */

namespace duran\PHP;


class Writer
{
    function writeAnswer($result )
    {
        switch ($result) {
            case ($result->remainder35 == 0 ):
                echo "Linianos \n";

                break;
            case ($result->remainder5 == 0):
                echo "IT \n";
                break;
            case ($result->remainder3==0):
                echo "Linio \n" ;
                break;
            default:
                echo "$result->number \n";
        }
        return;
    }
}