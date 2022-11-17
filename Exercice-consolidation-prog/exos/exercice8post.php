<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Résultats des valeurs fournies dans le formulaire de l'exercice 8">
    <link rel="stylesheet" href="../style/main.css">
    <title>Resultats formulaire exercice 8</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Résultats formulaire de l'exercice 8</h1>
        <?php
        if (!empty($_POST['nomCours']) && !empty($_POST['nomProf'])) {
            //Ici on récupère la classe CoursProfesseur
            require_once('../modules/CoursProfesseur.php');
            /*On récupère ici les valeurs du formulaire et on les affecte a des variables */
            $nomCours = htmlspecialchars($_POST['nomCours']);
            $nomProf = htmlspecialchars($_POST['nomProf']);
            $a = new CoursProf($nomCours, $nomProf);
            $a -> bienvenue();
        } else {
            echo 'Veuillez remplir tous les champs avant d\'envoyer le formulaire <br>
            Vous allez être redirigé <strong>automatiquement</strong>';
            //Ici on redirige sur la page du formulaire automatiquement apres 3 secondes
            header('refresh:3; url=../exos/exercice8.php');
        }
        ?>
    </main>
</body>

</html>