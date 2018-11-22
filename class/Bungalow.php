<?php

include('Hebergement.php');

class Bungalow extends Hebergement {

    // constructeur maniere A
    public function __construct()
    {
            $this->setCouchage(6);
            $this->setWc(1);
            $this->setDouche(1);
            $this->setCuisine(1);
    }

    // constructeur maniere B
        // public $nbCouchage = 6;
        // public $nbWc = 1;
        // public $nbDouche = 1;
        // public $nbCuisine = 1;

        // public function __construct(){
        //     parent::__construct($nbCouchage,$nbWc,$nbDouche,$nbCouchage)

        // }
    
}