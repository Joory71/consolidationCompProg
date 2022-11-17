<?php
include('../models/bdd.php');
$maxLigne = 3;
$nbLigne = 1;
$cpt = 0;
$req = $bdd->query("SELECT * FROM cours");

foreach ($req as $row) {
        if (strlen($row['nomCours']) > 20)
   $row['nomCours'] = substr($row['nomCours'], 0, 17) . '...';
        echo '<div class="wrapper-card col-lg-3 col-6 mx-auto">
        <a href="../views/info-cours/' . $row['id'] . '.php">
        <div class="wrapper-img">
        <img src="../medias/cours/' . $row['id'] . '.jpg" alt="photo">
        </div><h2>' . $row['code'] . '</h2><h3>' . $row['nomCours'] . '</h3>
        <p>' . $row['trigramme'] . '</p></a></div>';
        $cpt++;
        if ($cpt / $maxLigne != 1 ) {
        } else {
            echo '<br>';
            $cpt=0;
        }
}
$bdd = null;
