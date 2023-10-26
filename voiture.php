<?php
/**
 * classe ferrari fille de la voiture
 */
class Ferrari extends Voiture
{
    
    public function __construct()
    {
        parent::__construct();
        $this -> acceleration = 10;
    }
}


/**
 * Classe représentant une Voiture
 * Geres la marque et la couleur d'une voiture.
 */
 class Voiture {
    protected float $vitesse;

    protected float $acceleration;

    protected bool $moteurDemarre;

        protected function __construct(){
            $this ->vitesse = 0;
            $this->moteurDemarre = false;
        }

        public function demarrer(){
            $this->moteurDemarre = true;
        }

        public function eteindre(){
            $this->moteurDemarre = false;
        }

        public function accelerer(){
            if($this->moteurDemarre){
                $this->vitesse += $this -> acceleration;
            }
        }

        public function getVitesse(){
            return  $this->vitesse;
        }

        public function getAcceleration(){
            return $this->acceleration;
        }
 }

 $maFerrari = new Ferrari();
 $maFerrari -> demarrer();
 echo $maFerrari -> getVitesse(), '<br>';
 $maFerrari -> accelerer();
 echo $maFerrari -> getVitesse(), '<br>';
 $maFerrari -> accelerer();
 echo $maFerrari -> getVitesse(), '<br>';


    
 