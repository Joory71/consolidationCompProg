<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Instanciation de la classe Livre">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 9</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 9</h1>
        <?php
        //Je récupère le code de la classe
        include '../modules/Livre.php';
        //Instanciation de la classe livre
        $HarryPotter = new Livre();
        $HarryPotter->setInfoLivre(1,'Harry Potter et la chambre des secrets','JK Rowling','Flamarion','Sci-fi');
        $HarryPotter->getInfoLivre();
        //Une autre instanciation de la classe livre
        $SeigneurDesAnneaux = new Livre();
        $SeigneurDesAnneaux->setInfoLivre(2, 'Le Seigneur des anneaux, l\'anneau de pouvoir','JRR Tolkien', 'Hachette', 'Science-fiction');
        $SeigneurDesAnneaux->getInfoLivre();
        ?>
    </main>
</body>

</html>