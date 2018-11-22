<?php

class Hebergement {

    protected $nbCouchage;
    protected $nbWc;
    protected $nbDouche;
    protected $nbCuisine;

    protected $mon_hebergement_est_il_nettoye;
    protected $mon_hebergement_est_il_occupe;
    protected $mon_hebergement_est_il_reserve;
 

    // constructeur
    public function __construct($nbCouchage,$nbWc,$nbDouche,$nbCuisine)
    {
        $this->setCouchage($nbCouchage);
        $this->setWc($nbWc);
        $this->setDouche($nbDouche);
        $this->setCuisine($nbCuisine);
        $this->setMon_hebergement_est_il_nettoye();
        $this->setMon_hebergement_est_il_occupe();
        $this->setMon_hebergement_est_il_reserve();
    }

    // methodes setters
    public function setCouchage($nouveau_couchage){
        $this->nbCouchage = $nouveau_couchage;
    }
    
    public function setWc($nouveau_wc){
        $this->nbWc = $nouveau_wc;
    }

    public function setDouche($nouveau_douche){
        $this->nbDouche = $nouveau_douche;
    }

    public function setCuisine($nouveau_cuisine){
        $this->nbCuisine = $nouveau_cuisine;
    }

    public function setMon_hebergement_est_il_nettoye(){
        $this->mon_hebergement_est_il_nettoye = false; 
    }

    public function setMon_hebergement_est_il_occupe(){
        $this->mon_hebergement_est_il_occupe = true;
    }

    public function setMon_hebergement_est_il_reserve(){
        $this->setMon_hebergement_est_il_reserve = true;
    }

    // methodes getters
    public function getCouchage(){
        return $this->nbCouchage;
    }

    public function getWc(){
        return $this->nbWc;
    }

    public function getDouche() {
        return $this->nbDouche;
    }
    public function getCuisine(){
        return $this->nbCuisine;
    }

    public function getMon_hebergement_est_il_nettoye(){
        return $this->mon_hebergement_est_il_nettoye;
    }

    public function getMon_hebergement_est_il_occupe(){
        return $this->mon_hebergement_est_il_occupe;
    }

    public function getMon_hebergement_est_il_reserve(){
        return $this->mon_hebergement_est_il_reserve;
    }

    // les autres methodes
    public function Nettoyer(){
        $this->mon_hebergement_est_il_nettoye = true;
    }
    
    public function Occuper(){
        $this->mon_hebergement_est_il_occupe = true;
    }

    public function Reserver(){
        $this->mon_hebergement_est_il_reserve = true;
    }
}
