<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Exercice 2 - Page html avec hello world plus une image mais générés en PHP">
    <link rel="stylesheet" href="../style/main.css">
    <title>Exercice 2 - Page html générée en php</title>
</head>

<body>
    <?php
    include '../modules/menu.php';
    ?>
    <?php
    echo '<main>
        <h1>Hello World</h1>
        <img src="../medias/spider-web.jpg" alt="Photo d\'une toile d\'araignée avec de la rosée dessus">
    </main>';
    ?>
</body>

</html>