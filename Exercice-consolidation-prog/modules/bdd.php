
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '');
} catch (PDOException $e) {
    print "Erreur!:" . $e->getMessage() . "<br/>";
    die();
}
?>
