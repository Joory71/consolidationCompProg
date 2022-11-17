<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

                <?php
                echo '<div class="row">';
                include('../controllers/card-cours.php');
                echo '</div>';
                ?>

        </div>
    </main>
</body>

</html>