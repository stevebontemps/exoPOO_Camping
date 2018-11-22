<?php
/**
 * Created by PhpStorm.
 * User: bontemps
 * Date: 14/11/18
 * Time: 11:04
 */
// création classe pays
class Pays {
    //attribut
    private $nom_pays;

    // construct
    public function __construct($np){
        $this->setNomDePays($np);
    }
    
    //mon setter
    public function setNomDePays($np){
        //affecte une valeur qui s'appelle $np à l'attribut nom_pays
        $this->nom_pays = $np;
    }

    // mon getter
    public function getNomPays(){
        // retourne la valeur de l'attribut nom_pays
        return $this->nom_pays;
    }

    
}
