<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les différents utilisateurs sous forme de 'carte résumé'">
    <?php include('../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../style/main.css">
    <title>Dashboard Utilisateurs</title>
</head>
<header>
    <?php
    include('../views/partials/menu.php');
    ?>
</header>

<body>
    <main>
        <h1>Dashboard utilisateurs</h1>
        <div class="container">
            <div class="row">
                <?php
                include('../controllers/card-users.php');
                ?>
            </div>
        </div>
    </main>
</body>

</html>