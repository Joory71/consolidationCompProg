<?php
class Utilisateur {
    public $nom;
    public $role;

    public function __construct($nom, $role){
        $this->nom = $nom;
        $this->role = $role;
    }
    //Fonction publique qui permet d'afficher un message de bienvenue en fonction du rôle de l'utilisateur
    public function bienvenue(){
        if($this->role == "admin"){
            echo nl2br("Bonjour " . $this->nom . "\n Vous êtes l'administrateur du site");
        }else if($this->role == "membre"){
            echo nl2br("Bonjour " . $this->nom . "\n Vous êtes membre du site");
        }else if($this->role == "gestionnaire"){
            echo nl2br("Bonjour " . $this->nom . "\n Vous êtes gestionnaire du site");
        }else /*if($this->role == "autre")*/{
            echo nl2br("Bonjour " . $this->nom . "\n Vous êtes invité sur ce site");
        }
    }
}

?>