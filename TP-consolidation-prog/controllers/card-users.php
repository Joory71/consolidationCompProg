<?php
include('../models/bdd.php');

$req = $bdd->query("SELECT * FROM users");

foreach ($req as $row) {
        echo '<div class="wrapper-card col-lg-4 col-6"><a href="../views/info-user/' . $row['id'] . '.php"><div class="wrapper-img"><img src="../medias/avatars/' . $row['id'] . '.jpg" alt="photo"></div><h2>' . $row['nom'] . '</h2><h3>' . $row['prenom'] . '</h3><p>' . $row['role'] . '</p></a></div>';
}
$bdd = null;
?>