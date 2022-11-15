<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Résultats des valeurs fournies dans le formulaire de l'exercice 7">
    <link rel="stylesheet" href="../style/main.css">
    <title>Resultats formulaire exercice 7</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Résultats formulaire de l'exercice 7</h1>
        <?php
        if (!empty($_POST['nom']) && !empty($_POST['role'])) {
            //Ici on include le fichier Utilisateurs qui contient la classe à utiliser
            require_once('../modules/Utilisateurs.php');
            /*On récupère ici les valeurs du formulaire et on les affecte a des variables */
            $nom = htmlspecialchars($_POST['nom']);
            $role = htmlspecialchars($_POST['role']);
            $user = new Utilisateur($nom, $role);
            $user -> bienvenue();
        } else {
            echo 'Veuillez remplir tous les champs avant d\'envoyer le formulaire <br>
            Vous allez être redirigé <strong>automatiquement</strong>';
            //Ici on redirige sur la page du formulaire automatiquement apres 3 secondes
            header('refresh:3; url=../exos/exercice7.php');
        }
        ?>
    </main>
</body>

</html>