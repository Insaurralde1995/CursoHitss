<?php

require '../vendor/autoload.php';

use MixPlay\Math\CalculatorFactory;


try {

    echo CalculatorFactory::$COUNTER;

    $calc = CalculatorFactory::createCalculator(1);


 $calc
    ->add(45)
    ->mul(2)
    ->pow(2)
    ->div(1)
    ->sus(0);

} catch (InvalidArgumentException $e){
    echo $e->getMessage();

}

    echo $calc->getresult();

//var_dump($calc);
