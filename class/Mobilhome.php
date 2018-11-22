<?php

//include('Hebergement.php');

class Mobilhome extends Hebergement {

    //constructeur maniere A
    // public function __construct()
    // {
    //     $this->setCouchage(4);
    //     $this->setcuisine(1);
    //     $this->setWc(2);
    //     $this->setDouche(2);
    //     $this->setBalcon(1);
    

    //constructeur maniere B
    // private $nbCouchage = 4;
    // private $nbCuisine = 1;
    // private $nbWc = 2;
    // private $nbDouche = 2;
    // private $nbBalcon;

    private $nbBalcon;
    

    public function __construct() {

        parent::__construct(4,2,2,1);

        $this->setBalcon(1);
    
    }
    
    public function setBalcon($nouveau_balcon){
        $this->nbBalcon = $nouveau_balcon;
    }

    public function getnbBalcon(){
        return $this->nbBalcon;
    }


    public function toString(){
        return 'il y a dans ce mobil_home ' . $this->nbCouchage . ' couchages, ' . $this->nbCuisine .
         ' cuisine, ' . $this->nbWc . ' wc, ' . $this->nbDouche . ' douches et ' . $this->nbBalcon .
          ' balcon. mobilhome ';
    }
}