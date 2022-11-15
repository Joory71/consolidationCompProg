<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exercice 3 - Création d'un programme simple calculant un nombre de ligne en fonction du nombre d'images">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 3 - Programme du calcul de ligne en fonction du nombre d'images</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 3</h1>
        <h2>Programme php qui calcule le nombre de lignes affichées et le nbr d'images affichées sur la dernière ligne, sachant que l'on a que 3 images par ligne. </h2>
    <?php
    /*Ecrire un programme qui calcule le nombre de lignes affichées et le nbr d'images affichées sur la dernière ligne, sachant qu'on a que 3 images par ligne. */
    /*Définir le nombre de lignes */
    /*Tant qu'on a + de 3 images, boucler pourque toutes les 3 images on ajoute une ligne */
    /*Quand on a - de 3 images on arrête de créer des lignes et on affiche le nombre d'images sur ce dernier tour de boucle */
    include '../modules/nbLignes.php';
    //On appelle la fonction et on rentre en paramètre le nombre total d'images.
    ligne(3,3);
    echo '<br>';
    ligne(8,3);
    echo '<br>';
    ligne(144,3);
    echo '<br>';
    ligne(152,3);
    ?>
    </main>
</body>
</html>