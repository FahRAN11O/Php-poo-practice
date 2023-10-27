<?php

namespace Voitures;

//require_once 'Logger.php';


/**
 * Classe représentant une Voiture
 * Geres la marque et la couleur d'une voiture.
 */
//Si on met une classe comme final class, elle ne peut pas être instanciée
/*Si on met la classe comme abstrait, alors on ne peut plus l'instancier*/

/*********************************L'anti-slash c'est pour revenir dans le dossier d'avant (racine)*/
 abstract class Voiture implements \Vehicule {
    //Le methode dans logger doit être trouver dans cette classe
    use \Utilis\Logger;
    const RALENTIR = 1;

    //protected c'est pour les classes enfants
    protected float $vitesse;

    protected float $acceleration;

    protected bool $moteurDemarre;

        protected function __construct(){
            $this -> log('une voiture est crée');
            $this ->vitesse = 0;
            $this->moteurDemarre = false;
        }

        public function demarrer(){
            $this -> log('Le moteur est démarré');
            $this->moteurDemarre = true;
        }

        public function eteindre(){
            $this->moteurDemarre = false;
        }

        public function accelerer(){
            if($this->moteurDemarre){
                $this -> log('la voiture accélére');
                $this->vitesse += $this -> acceleration;
            }
        }

        public function getVitesse(){
            return  $this->vitesse;
        }

        public function getAcceleration(){
            return $this->acceleration;
        }

        public function ralentir(){
            $this -> vitesse-=self::RALENTIR;
        }
 }





 
 