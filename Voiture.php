<?php

class Voiture{
 // option avec attribut public et constructeur sans setters 
    // public $couleur;
    // public $marque;
    // public $annee;


    // public function __construct($c,$m,$a){

    //     $this->couleur = $c;
    //     $this->marque = $m;
    //     $this->annee = $a;
    // }


    // option avec attribut prive avec constructeur setters et getters
    private $couleur;
    private $marque;
    private $annee;
    private $cv;
    private $roue;
    private $jantes;
    private $volant;


// constructeur
    public function __construct($c,$m,$a){
// this = objet courant
        $this->setCouleur($c);
        $this->setMarque($m);
        $this->setAnnee($a);
        $this->setChevaux(NULL);
        $this->setRoue(NULL);
        $this->setJantes(NULL);
        $this->setVolant(NULL);
    }
    

    // mutateur = setter
    public function setCouleur($c){
        $this->couleur = $c;
    }

    public function setMarque($m){
        $this->marque = $m;
    }

    public function setAnnee($a){
        $this->annee = $a;
    }

    public function setChevaux($cv){
        $this->chevaux = $cv;
    }

    public function setRoue($r){
        $this->roue = $r;
    }

    public function setJantes($j){
        $this->jantes = $j;
    }

    public function setVolant($v){
        $this->volant = $v;
    }

    // accesseur = getter
    public function getCouleur(){
        return $this->couleur;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function getChevaux(){
        return $this->chevaux;
    }

    public function getRoue(){
        return $this->roue;
    }

    public function getJantes(){
        return $this->jantes;
    }

    public function getVolant(){
        return $this->volant;
    }

    // methode toString
    public function toString(){
        return 'Ma voiture est ' . $this->couleur . ' dégueulasse, de marque ' . $this->getMarque() . '.' . "\r\n" . 
        'La vielle est de ' . $this->getAnnee() . ' , elle a ' . $this->getChevaux() . ' chevaux et heureusement ' . $this->getRoue() . ' roues la conne.' . "\r\n" .
        'Elle a bien entendu ' . $this->getJantes() . ' jantes, et puisque ca roule ' . $this->getVolant() . ' volant.' . "\r\n";       
    }

}


$ma_voiture = new Voiture("Rouge", "Renault", 2018);
//echo $ma_voiture->couleur;
echo $ma_voiture->getCouleur();
echo "\r\n";

echo $ma_voiture->getMarque();
echo "\r\n";

echo $ma_voiture->getAnnee();
echo "\r\n";

echo $ma_voiture->setChevaux(5);
echo $ma_voiture->getChevaux();
echo "\r\n";

echo $ma_voiture->setRoue(4);
echo $ma_voiture->getRoue();
echo "\r\n";

echo $ma_voiture->setJantes(4);
echo $ma_voiture->getJantes(4);
echo "\r\n";

echo $ma_voiture->setVolant(1);
echo $ma_voiture->getVolant();
echo "\r\n";

echo $ma_voiture->toString();

