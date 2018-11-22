<?php
/**
 * Created by PhpStorm.
 * User: bontemps
 * Date: 14/11/18
 * Time: 11:04
 */

//require_once('Pays.php');

// création classe camping
class Camping {

    //Attributs
    private $nom;
    private $adresse;
    private $ville;
    private $pays;
    private $hebergements;
    

    // constructeur
    public function __construct($n,$a,$v,Pays $p)
    {
        $this->setNom($n);
        $this->setAdresse($a);
        $this->setVille($v);
        $this->setPays($p);
        $this->setHebergements();
    }


    //méthodes : setters = mutateurs
    public function setNom($nouveau_nom){
        $this->nom=$nouveau_nom;
    }

    public function setAdresse($nouveau_adresse){
        $this->adresse=$nouveau_adresse;
    }

    public function setVille($nouveau_ville){
        $this->ville=$nouveau_ville;
    }

    public function setPays(Pays $nouveau_pays){
        $this->pays=$nouveau_pays;
    }

    public function setHebergements(){
        $this->hebergements = array();
    }

    public function addHebergements(Hebergement $_hebergement){
        array_push($this->hebergements, $_hebergement);
    }

    public function toStringHebergement(){
        $machaine = "";
        foreach ($this->hebergements as $hebergement) {
            

            $machaine = $machaine . $hebergement->toString() . "\r\n";
        }

        return $machaine;

    }



    // methodes : getters = accesseurs
    public function getNom(){
        return $this->nom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getVille(){
        return $this->ville;
    }

    public function getPays(){
        return $this->pays;
    }

    
    public function toString(){
        
        print_r($this->nom . ' ' . $this->adresse . ' ' . $this->ville . ' ' . $this->pays->getNomPays());
        
    }



}

