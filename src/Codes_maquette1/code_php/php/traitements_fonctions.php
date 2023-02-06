<?php

/**
 * Renvoie sous forme de chaine de caratere la table à sélectionner et/ou le motif
 *
 * @param $nom_table
 * @return string
 */
function table_choisie($nom_table){
    // action : afficher la table des utilisateurs
    if ($_POST["send"] == 'utilisateurs') {
        return "Location: admin_page.php?table=1";
    }

    // action : afficher la table des statistiques
    elseif ($_POST["send"] == 'statistiques') {
        return "Location: admin_page.php?table=2";
    }

    // action : afficher la table des erreurs lors des connexions
    elseif ($_POST["send"] == 'error log') {
        return "Location: admin_page.php?table=3";
    }

    // action : afficher les tuples avec un motif et une table choisies
    elseif ($_POST["send"] == 'rechercher') {
        return "Location: admin_page.php?table=4&nom='".$_POST["mot"]."'&table_nom='".$_POST["table"]."'";
    }
}

function supprimer_user($parID){
    $connexion = mysqli_connect("localhost", "root", "01r1173");
    $bd = mysqli_select_db($connexion, "Utilisateurs");
    $ins = "DELETE FROM utilisateur_inscrit where id = ?";
    $insp = mysqli_prepare($connexion, $ins);
    mysqli_stmt_bind_param($insp, 'i', $parID);
    mysqli_stmt_execute($insp);
}