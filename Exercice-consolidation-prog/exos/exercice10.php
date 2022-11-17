<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Connexion à une bdd puis instaciation d'une classe avec les données de cette BDD">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 10</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 10</h1>
        <?php
        //Je récupère la connexion à la bdd
        include '../modules/bdd.php';
        include ('../modules/Livre.php');
        $req = $bdd->prepare("SELECT * FROM livre");
        $req->execute();
        /* Récupération de toutes les lignes d'un jeu de résultats */
        $result = $req->fetchAll();
        foreach ($result as $row => $a) {
            //Ici je créé des variables pour que ce soit plus facile pour moi de m'y retrouver après mais ce n'est pas obligatoire
            $id = $a['id'];
            $titre = $a['titre'];
            $auteur = $a['auteur'];
            $editeur = $a['editeur'];
            $genre = $a['genre'];
            //Instanciation de la classe Livre dans la boucle pour créer un nouvel objet à chaque itération
            $Livre = new Livre();
            //On rentre les paramètres qui correspondent à nos données en BDD
            $Livre->setInfoLivre($id,$titre,$auteur,$editeur,$genre);
            //On affiche les données via la fonction getInfoLivre de la classe.
            $Livre->getInfoLivre();
            echo '<br>';
        }
        ?>
    </main>
</body>

</html>