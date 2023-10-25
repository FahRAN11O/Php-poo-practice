<?php
class FormContactValidation {
    private $nom;
    private $email;
    private $message;

    public function __construct($nom, $email, $message) {
        $this -> nom = $nom;
        $this -> email = $email;
        $this -> message = $message;
    }

    public function valider(){
        //Effectuer des validations sur les données du formulaire
        //Retourner true si les données sont valides, sinon false
    }

    public function envoyerEmail(){
        //Envoyer l'email avec les données du formulaire
    }

    public function traiter(){
        if($this -> valider()){
            $this->envoyerEmail();
            echo "Le formulaire a été traité avec succès.";
        }else{
            echo "Erreur : le formulaire n'est pas valide.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $formulaire = new FormContactValidation($nom, $email, $message);
        $formulaire->traiter();
    }

