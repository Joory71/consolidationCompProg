<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Petit programme de calcul bancaire (dépots, retraits, solde bancaire etc..)">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 4</title>
</head>
<body>
<?php
include '../modules/menu.php';
?>
<main>
    <?php
    /*Calculer le solde bancaire si nous avons les diff opérations de dépot et de retrait suivantes

    Dépot : 122 - 143 - 45 - 28
    Retrait : 12 - 47 - 60 - 80

    Calculer le montant moyen des dépôts

    Calculer le montant moyen des retraits

    Comment résoudre ?

    Créer un formulaire pour rentrer les valeurs
    Récupérer les différentes valeurs
    Effectuer les calculs dans un second fichier*/
    ?>
    <form id="form-exo4" action="exercice4post.php" method="post">
        <label for="depot">Montant du dépot</label>
        <input type="number" name="depot1">
        <input type="number" name="depot2">
        <input type="number" name="depot3">
        <input type="number" name="depot4">
        <label for="retrait">Montant du retrait</label>
        <input type="number" name="retrait1">
        <input type="number" name="retrait2">
        <input type="number" name="retrait3">
        <input type="number" name="retrait4">
        <input type="submit">
    </form>
</main>
</body>
</html>