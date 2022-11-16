<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les différents utilisateurs sous forme de 'carte résumé'">
    <?php include('../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../style/main.css">
    <title>Dashboard Cours</title>
</head>
<header>
    <?php
    include('../views/partials/menu.php');
    ?>
</header>

<body>
    <main>
        <h1>Dashboard Cours</h1>
        <div class="container">
            <div class="row">
                <?php
                include('../controllers/card-cours.php');
                ?>
            </div>
        </div>
    </main>
</body>

</html>