<?php
class CoursProf {
    public $nomCours;
    public $nomProf;

    public function __construct($nomCours, $nomProf){
        $this->nomCours = $nomCours;
        $this->nomProf = $nomProf;
    }
    //Fonction publique qui permet d'afficher un message de bienvenue en fonction du rôle de l'utilisateur
    public function bienvenue(){
        echo 'Vous êtes en cours de '.$this->nomCours.' et votre professeur est '.$this->nomProf;
    }
}

?>