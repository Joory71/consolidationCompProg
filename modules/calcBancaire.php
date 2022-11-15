<?php
session_start();
//Ici on créé une fonction pour calculer le total des dépots
function calcDepot($a){
    $totalDepot = 0;
    //On parcours le tableau et on additionne les valeurs entre elles
    foreach ($a as $value) {
        $totalDepot += $value;
    }
    return $totalDepot;
}
//Ici on créé un fonction pour calculer le total des retraits
function calcRetrait($a){
    $totalRetrait = 0;
    foreach ($a as $value) {
        $totalRetrait += $value;
    }
    return $totalRetrait;
}
//Ici on créé un fonction pour calculer le solde du compte apres les différents dépots
function calcSolde($a, $b)
{
    $totalDepot = calcDepot($a);
    $totalRetrait = calcRetrait($b);
    $soldeFinal = $totalDepot - $totalRetrait;
    echo 'Le solde bancaire est de ' . $soldeFinal . '€ suite au différentes opérations de dépot et de retrait';
};
//Enfin les fonctions pour la moyenne dépots / retraits
function moyenneDepot($a){
    $totalDepot = calcDepot($a);
    //Ici on compte le nombre d'éléments dans le tableau pour savoir par combien diviser
    $nbEntries = count($a);
    $moyenneDepot = $totalDepot / $nbEntries;
    echo 'Le montant moyen des dépots est de ' . $moyenneDepot . ' €';
};

function moyenneRetrait($b){
    $totalRetrait = calcRetrait($b);
    $nbEntries = count($b);
    $moyenneRetrait = $totalRetrait / $nbEntries;
    echo 'Le montant moyen des retraits est de ' . $moyenneRetrait . ' €';
}
?>