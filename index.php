<?php
/**
 * Created by PhpStorm.
 * User: bontemps
 * Date: 14/11/18
 * Time: 11:37
 */

 //methode sans Autoloader
// include('Camping.php');
// include('Tente.php');
// include('Mobilhome.php');



// methode avec Autoloader
/*Option B : chargement de une class qui les charge toutes*/
// au lieu de charger une class apres l autre comme au dessus
// on charge le singleton Autoloader
require('Autoloader.php');
// on appele une methode : register de la Classe Autoloader
Autoloader::register();

$mon_beau_pays = new Pays('France');

echo $mon_beau_pays->getNomPays();
echo "\r\n";


$mon_camping = new Camping("les flots bleus", "rd216", "vias", $mon_beau_pays);

// echo("steve du tete");
// echo "\r\n";
// print_r("steve du bontemps");
// echo "\r\n";


$mon_camping->toString();
echo "\r\n";

echo $mon_camping->getNom();
echo "\r\n";

// echo $mon_camping->nom;
// echo "\r\n";

$ma_tente = new Tente();
echo "\r\n";
//$ma_tente->toString();

$Mobilhome = new Mobilhome();
echo "\r\n";
//$Mobilhome->toString();
echo "\r\n";

$mon_camping->addHebergements($ma_tente);
$mon_camping->addHebergements($Mobilhome);
echo "\r\n";
//echo $mon_camping->hebergements[0]->toString();
echo "\r\n";
echo "\r\n";


//echo $mon_camping->hebergements[1]->toString();
 
echo $mon_camping->toStringHebergement();