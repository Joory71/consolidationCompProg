<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Exercice où il faut écrire une chaine de caractère en php avec une apostrophe dedans">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 5</title>
</head>
<body>
<?php
include '../modules/menu.php';
?>
<main>
    <h1>Exercice 5</h1>
    <?php
    //On utilise le caractère "\n" pour signifier un saut de ligne html
    // La fonction nl2br ci-dessous permet au "\n" de fonctionner
    $varchar = nl2br("Bonjour c'est moi. \n T'es le bienvenu sur mon site.");
    echo $varchar;

    ?>
</main>
</body>
</html>