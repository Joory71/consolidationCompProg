<?php
include('../../controllers/more-info-user.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les informations détaillées de <?php echo $prenom;?>">
    <?php include('../../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../../style/main.css">
    <title>Plus d'information sur <?php echo $prenom;?></title>
</head>
<header>
    <?php
    include('../../views/partials/menu.php');
    ?>
</header>

<body>
    <main>

        <h1>Plus d'informations sur <?php echo $prenom;?></h1>
        <div class="container">
            <div class="row">
                <?php
               echo '<div class="wrapper-card col-lg-4 col-6">
               <div class="wrapper-img"><img src="/medias/avatars/' . $idUser . '.jpg" alt="Photo de profil de Simon">
               </div><h2>' . $nom . '</h2>
               <h3>' . $prenom . '</h3>
               <p>' . $role . '<br>'
                . $adresse . '<br>'
                . $telephone . '</p>
               </div>';
                ?>
            </div>
        </div>
    </main>
</body>

</html>