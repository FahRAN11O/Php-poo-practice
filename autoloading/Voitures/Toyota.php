<?php

namespace Voitures;

class Toyota extends Voiture
{
    
    public function __construct()
    {
        parent::__construct();
        $this -> acceleration = 5;
    }
}