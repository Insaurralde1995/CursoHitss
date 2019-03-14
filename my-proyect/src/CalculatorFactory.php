<?php

namespace MixPlay\Math;

use InvalidArgumentException;

//no hace falta importar nada porque estamos en el mismo namespace

class CalculatorFactory

{
    const SCIENTIFIC = 1;

    const REGULAR = 2;

    const ASTRONOMIC = 3;

    public static $COUNTER = 0;

    private function __construct() {} 

    public static function createCalculator(int $type): Calculator

    {
        self::$COUNTER++;

        if ($type == self::SCIENTIFIC){
            return new ScientificCalculator;
        }

        if ($type == self::REGULAR) {
            return new Calculator;
        }
        
        if ($type == self::ASTRONOMIC){
            return new AstronomicCalculator;

            throw new InvalidArgumentExcepcion ('Missing calculator type, given' . $type);
        }   
    }
}
