<?php
include('../../controllers/more-info-cours.php');
include('../../controllers/more-info-user.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Page présentant les informations détaillées du cours <?php echo $code;?>">
    <?php include('../../views/partials/cdn.php');
    ?>
    <link rel="stylesheet" href="../../style/main.css">
    <title>Plus d'information sur le cours <?php echo $code;?></title>
</head>
<header>
    <?php
    include('../../views/partials/menu.php');
    ?>
</header>

<body>
    <main>

        <h1>Plus d'informations sur le cours <?php echo $code;?></h1>
        <div class="container">
            <div class="row">
                <?php
               echo '<div class="wrapper-card col-lg-4 col-6">
               <div class="wrapper-img"><img src="/medias/cours/' . $idCours . '.jpg" alt="Logo linux"></di>
               <h2>' . $nomCours . '</h2>
               <h3>' . $code . '</h3>
               <h3>' . $prenom . '</h3>
               <h3>' . $nom . '</h3>
               <p>' . $trigramme . '<br>'
                . $description . '</p>
               </div>';
                ?>
            </div>
        </div>
    </main>
</body>

</html>