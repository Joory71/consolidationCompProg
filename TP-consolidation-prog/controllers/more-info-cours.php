<?php
//Je récupère ici la connection à la bdd
include('../../models/bdd.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$idCours= substr( $actual_link, -5, 1);
$req=$bdd->prepare("SELECT * FROM cours where id = $idCours");
$req->execute();

/* Récupération de toutes les lignes d'un jeu de résultats */

$result=$req->fetchAll();
foreach ($result as $row => $a) {
//Je stock les valeurs dans de nouvelles variables pour plus de facilité d'intégration derrière
    $code = $a['code'];
    $nomCours = $a['nomCours'];
    $trigramme = $a['trigramme'];
    $description = $a['description'];

}
$bdd = null;
