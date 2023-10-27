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

    public function getVitesse(){
        return $this->vitesse.' km/h';
    }
}