<?php

namespace HTL3R\Balls\BallTypes;
//interface einbinden

use HTL3R\Balls\Interfaces\BallInterface as BallInterface;


class Testball extends Ball implements BallInterface{


    function __construct(string $name, float $durchmesser, string $material)
    {
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }

    /**
     * @return float
     */

    public function getVolumen(): float
    {
       return (1/3)*4*($this->durchmesser/2)*($this->durchmesser/2)*($this->durchmesser/2)*pi();
    }



}