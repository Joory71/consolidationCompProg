<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Formulaire qui demande le nom d'un cours et d'un professeur">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 8</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 8</h1>
        <form id="form-exo8" action="exercice8post.php" method="post">
        <label for="nom">Nom du cours</label>
        <input type="text" name="nomCours">
        <label for="role">Nom professeur</label>
        <input type="text" name="nomProf">
        <input type="submit">
    </form>
        <?php


        ?>
    </main>
</body>

</html>