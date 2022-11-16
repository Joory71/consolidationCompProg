<?php
include('../models/bdd.php');

$maxLigne = 4;
$nbLigne = 1;
$cpt = 0;
$req = $bdd->query("SELECT * FROM users");

foreach ($req as $row) {
    $cpt++;
    if ($cpt / $maxLigne != 1 ) {
        echo '<div class="wrapper-card">';
        echo '<div><img src="" alt="photo"><h2>' . $row['nom'] . '</h2><h3>' . $row['prenom'] . '</h3><p>' . $row['role'] . '</p></div>';
        echo '</div>';
        echo $cpt;
    } else {
        echo '<div class="wrapper-card">';
        echo '<div><img src="" alt="photo"><h2>' . $row['nom'] . '</h2><h3>' . $row['prenom'] . '</h3><p>' . $row['role'] . '</p></div>';
        echo '</div>';
        echo $cpt;
        $cpt=0;
    }
}
