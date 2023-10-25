<?php

/**
 * Classe représentant une Voiture
 * Geres la marque et la couleur d'une voiture.
 */
 class Voiture {
    protected $marque;
    protected $couleur;

    public function setMarque($nom){
        $this->marque = strtoupper($nom);
    }

    public function setCouleur($nom){
        $this->couleur = strtolower($nom);
    }

    public function getMarque(){
        return $this->marque ;
    
    }

    public function getCouleur(){
        return $this ->couleur;
    }
 }
    class Toyota extends Voiture{
        public function setMarque($nom){
            $this->marque='TOYOTA';
        }
     }



 //Création d'un objet à partir de la clase Voiture
 $uneToyota = new Toyota();

 //Définition des propriétés de l'objet
 $uneToyota->setMarque ('');
 $uneToyota -> setCouleur('Rouge');
 var_dump($uneToyota);

 
 