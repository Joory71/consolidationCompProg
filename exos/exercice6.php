<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Code php qui remplace une chaine de caractère par une autre choisie">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 6</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <main>
        <h1>Exercice 6</h1>
        <?php
        //Modification avec str_replace
        $varchar = nl2br("Bonjour c'est moi. \n T'es le bienvenu sur mon site.");

        $searchVal = array("moi", "T'es");

        $replaceVal = array("Joseph", "Tu es");

        $res = str_replace($searchVal, $replaceVal, $varchar    );
        print_r($res);

        //Avec substr on affiche "moi"
        $varcha = substr("Bonjour c'est moi", -3, 3);
        echo nl2br("\n J'affiche juste le mot \"" . $varcha . "\"");

        ?>
    </main>
</body>

</html>