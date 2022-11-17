<?php
include('../models/bdd.php');

$maxLigne = 3;
$nbLigne = 1;
$cpt = 0;
$req = $bdd->query("SELECT * FROM users");

foreach ($req as $row) {
    $cpt++;
    echo '<div class="wrapper-card col-lg-3 col-6 mx-auto"><a href="../views/info-user/' . $row['id'] . '.php"><div class="wrapper-img"><img src="../medias/avatars/' . $row['id'] . '.jpg" alt="photo"></div><h2>' . $row['nom'] . '</h2><h3>' . $row['prenom'] . '</h3><p>' . $row['role'] . '</p></a></div>';
    if ($cpt / $maxLigne != 1 ) {
    } else {
        echo '<br>';
        $cpt=0;
    }
}
$bdd = null;
