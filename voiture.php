<?php



interface Vehicule{
    public function demarrer();
    public function accelerer();
    public function getVitesse();
    public function ralentir();
}


/**
 * Classe représentant une Voiture
 * Geres la marque et la couleur d'une voiture.
 */
//Si on met une classe comme final class, elle ne peut pas être instanciée
 class Voiture implements Vehicule {

    const RALENTIR = 1;

    //protected c'est pour les classes enfants
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

        public function ralentir(){
            $this -> vitesse-=self::RALENTIR;
        }
 }

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

    public function getVitesse(){
        return $this->vitesse.' km/h';
    }
}

class Toyota extends Voiture
{
    
    public function __construct()
    {
        parent::__construct();
        $this -> acceleration = 5;
    }
}

 $maFerrari = new Ferrari();
 $maFerrari -> demarrer();
 echo $maFerrari -> getVitesse(), '<br>';
 $maFerrari -> accelerer();
 echo $maFerrari -> getVitesse(), '<br>';
 $maFerrari -> accelerer();
 echo $maFerrari -> getVitesse(), '<br>';

 $maToyota = new Toyota();
 $maToyota -> demarrer();
 echo $maToyota -> getVitesse(), '<br>';
 $maToyota -> accelerer();
 echo $maToyota -> getVitesse(), '<br>';
 $maToyota -> accelerer();
 echo $maToyota -> getVitesse(), '<br>';


    
 