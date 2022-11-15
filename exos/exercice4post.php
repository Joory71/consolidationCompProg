<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Résultats des valeurs fournies dans le formulaire de l'exercice 4">
    <link rel="stylesheet" href="../style/main.css">
    <title>Resultats formulaire exercice 4</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 4 - Résultats des calculs de l'exercice 4</h1>
        <?php
        if (!empty($_POST['depot1']) && !empty($_POST['depot2']) && !empty($_POST['depot3']) && !empty($_POST['depot4']) && !empty($_POST['retrait1']) && !empty($_POST['retrait2']) && !empty($_POST['retrait3']) && !empty($_POST['retrait4'])) {
            //Ici on include le fichier calcBancaire.php pour récupérer les fonctions etc
            include '../modules/calcBancaire.php';
            /*On récupère ici les valeurs du formulaire et on les stocke dans des tableaux */
            $depot = [htmlspecialchars($_POST['depot1']), htmlspecialchars($_POST['depot2']), htmlspecialchars($_POST['depot3']), htmlspecialchars($_POST['depot4'])];
            $retrait = [htmlspecialchars($_POST['retrait1']), htmlspecialchars($_POST['retrait2']), htmlspecialchars($_POST['retrait3']), htmlspecialchars($_POST['retrait4'])];
            //Je créé un tableau pour avoir un oeil sur les valeurs qui ont étés rentrées dans le formulaire
        ?>
            <table id="tabBancaire">
                <thead>
                    <td>
                        Dépôts
                    </td>
                    <td>
                        Retraits
                    </td>
                </thead>
                <tr>
                    <td><?php echo $depot[0] ?> €</td>
                    <td><?php echo $retrait[0] ?> €</td>
                </tr>
                <tr>
                    <td><?php echo $depot[1] ?> €</td>
                    <td><?php echo $retrait[1] ?> €</td>
                </tr>
                <tr>
                    <td><?php echo $depot[2] ?> €</td>
                    <td><?php echo $retrait[2] ?> €</td>
                </tr>
                <tr>
                    <td><?php echo $depot[3] ?> €</td>
                    <td><?php echo $retrait[3] ?> €</td>
                </tr>
            </table>

        <?php
            //Ici on appelle les différentes fonctions du fichier calcBancaire.php pour procéder aux vérifications.
            calcSolde($depot, $retrait);
            echo '<br>';
            moyenneDepot($depot);
            echo '<br>';
            moyenneRetrait($retrait);
        } else {
            echo 'Veuillez remplir tous les champs avant d\'envoyer le formulaire <br>
            Vous allez être redirigé <strong>automatiquement</strong>';
            //Ici on redirige sur la page du formulaire automatiquement apres 3 secondes
            header('refresh:3; url=../exos/exercice4.php');
        }
        ?>
    </main>
</body>

</html>