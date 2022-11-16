<?php
include('../../models/bdd.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$idUser= substr( $actual_link, -5, 1);
$req=$bdd->prepare("SELECT * FROM users where id = $idUser");
$req->execute();

/* Récupération de toutes les lignes d'un jeu de résultats */

$result=$req->fetchAll();
foreach ($result as $row => $a) {

    $nom = $a['nom'];
    $prenom = $a['prenom'];
    $role = $a['role'];
    $adresse = $a['adresse'];
    $telephone = $a['telephone'];

}
$bdd = null;
?>