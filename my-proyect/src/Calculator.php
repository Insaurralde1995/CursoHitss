<?php

namespace MixPlay\Math;
class Calculator


{
    protected $result = 0;

    public function __construct($initial =0)
    {

        $this->result = $initial;
    }

    public function getresult()
    {
        return $this->result;

    }

    public function add ($x = 0)
    {
        $this->result += $x;

        return $this;
    }
    
    public function sus ($x = 0)
    {
        $this->result -= $x;

        return $this;

    }
    public function div ($x = 1)
    {
        if ($x == 0){
            throw new \InvalidArgumentException('no se puede dividir por 0 capo, no jodas');
        }

        $this->result /= $x;
        
        return $this;

    }
    public function mul ($x = 0)
    {
        $this->result *= $x;
        
        return $this;

    }
}

