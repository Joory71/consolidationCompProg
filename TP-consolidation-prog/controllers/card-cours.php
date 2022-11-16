<?php
include('../models/bdd.php');

$req = $bdd->query("SELECT * FROM cours");

foreach ($req as $row) {
        echo '<div class="wrapper-card col-lg-4 col-6"><a href="../views/info-cours/' . $row['id'] . '.php"><div class="wrapper-img"><img src="../medias/cours/' . $row['id'] . '.jpg" alt="photo"></div><h2>' . $row['code'] . '</h2><h3>' . $row['nomCours'] . '</h3><p>' . $row['trigramme'] . '</p></a></div>';
}
$bdd = null;
?>