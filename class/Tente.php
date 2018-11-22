<?php

include('Hebergement.php');

class Tente extends Hebergement
{
        // constructeur maniere A
        // public $nbCouchage = 2;
        // public $nbWc = 0;
        // public $nbDouche = 0;
        // public $nbCuisine = 0;

        // public function __construct()
        // {
        //     parent::__construct($nbCouchage,$nbWc,$nbDouche,$nbCuisine);

        // }

        // constructeur maniere B
        public function __construct()
        {

            

            $this->setCouchage(2);
            $this->setWc(0);
            $this->setDouche(0);
            $this->setCuisine(0);

        }
        public function toString(){
        
            return 'Il y a ' . $this->nbCuisine . ' cuisine(s), il y a ' . $this->nbWc . ' wc, il y a ' 
            . $this->nbCouchage . ' couchage(s).';       
       }
}