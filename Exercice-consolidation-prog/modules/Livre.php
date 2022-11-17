<?php
class Livre {
    private $id;
    private $titre;
    private $auteur;
    private $editeur;
    private $genre;


    public function setInfoLivre($aId,$aTitre,$aAuteur,$aEditeur,$aGenre){
         $this->id = $aId;
         $this->titre = $aTitre;
         $this->auteur = $aAuteur;
         $this->editeur = $aEditeur;
         $this->genre = $aGenre;
    }
    /*public function __construct($id, $titre, $editeur, $genre){
        $this->id = $id;
        $this->titre = $titre;
        $this->editeur = $editeur;
        $this->genre = $genre;
    }*/

    //Fonction getter pour afficher toutes les infos concernant le livre
    public function getInfoLivre(){
            echo 'Livre n° '.$this->id.'<br>';
            echo 'Titre : '.$this->titre.'<br>';
            echo 'Auteur : '.$this->auteur.'<br>';
            echo 'Editeur : '.$this->editeur.'<br>';
            echo 'Genre : '.$this->genre.'<br>';

    }
}

?>