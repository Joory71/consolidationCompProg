<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Création de variables puis affichage d'un texte en fonction de la valeur">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 7</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 7</h1>
        <form id="form-exo7" action="exercice7post.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom">
        <label for="role">Choisr un rôle</label>
        <select name="role" id="admin">
            <option value="admin">Admin</option>
            <option value="membre">Membre</option>
            <option value="gestionnaire">Gestionnaire</option>
            <option value="autre">Autre</option>
        </select>
        <input type="submit">
    </form>
        <?php


        ?>
    </main>
</body>

</html>