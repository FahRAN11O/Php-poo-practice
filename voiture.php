<?php
 class Voiture {
    public $marque;
    public $couleur;

    public function demarrer(){
        return 'La voiture '.$this ->marque
            .' de couleur '.$this->couleur.' demarre.';
    }
 }

 //Création d'un objet à partir de la clase Voiture
 $uneToyota = new Voiture();

 //Définition des propriétés de l'objet
 $uneToyota->marque = 'Toyota';
 $uneToyota->couleur = 'Rouge';

 //Appel de la méthode de l'objet
 echo $uneToyota->demarrer();
 
 $uneRenault = new Voiture();
 $uneRenault->marque = 'Renault';
 $uneRenault->couleur = 'blanche';

 echo $uneRenault ->demarrer();