<?php
/*Ecrire un programme qui calcule le nombre de lignes affichées et le nbr d'images affichées sur la dernière ligne, sachant qu'on a que 3 images par ligne. */
    /*Définir le nombre total d'images et le nombre d'images par ligne */
    /*Pour définir le nombre de lignes on divise le nombre total d'images par le nombre d'images par ligne */
    /*Pour définir le nombre d'images sur la dernière ligne on doit définir le reste de la division effectuée plus haut.
    --> Donc le modulo*/

    function ligne($totalImages, $imgParLigne)
    {
        //Calcul du nb de lignes
        $nbLignes = ceil($totalImages / $imgParLigne);
        //Modulo pour avoir le nombre d'images sur la dernière ligne
        $imagesDerniereLigne = $totalImages % $imgParLigne;
        //Affiche le nombre de ligne
        echo 'Pour <strong>'.$totalImages.' images</strong>, il y a <strong>' . $nbLignes . ' ligne(s)</strong> au total et';
        //Affiche le nb d'images sur la dernière ligne
        echo ' il y a <strong>' . $imagesDerniereLigne . ' image(s)</strong> sur la dernière ligne';
    };