<?php
session_start();
if (!isset($_SESSION["login"])){
	header("Location: ../index.php");
}

if (isset($_SESSION['login'], $_SESSION['admin'])){

    // vérification que le traitement est effectué par l'utilisateur
    if ($_SESSION['admin'] == "oui"){

        if (isset($_POST["send"])){
            // sélection de l'action choisie

            // action : afficher la table des utilisateurs
            if ($_POST["send"] == 'utilisateurs') {
                header("Location: admin_page.php?table=1");
            }
        
            // action : afficher la table des statistiques
            elseif ($_POST["send"] == 'statistiques') {
                header("Location: admin_page.php?table=2");
            }
            
            // action : afficher la table des erreurs lors des connexions
            elseif ($_POST["send"] == 'error log') {
                header("Location: admin_page.php?table=3");
            }

            // action : afficher les tuples avec un motif et une table choisies
            elseif ($_POST["send"] == 'rechercher') {
                header("Location: admin_page.php?table=4&nom='".$_POST["mot"]."'&table_nom='".$_POST["table"]."'");
            }

        else{
                // suppression d'un utilisateur selectionné
                $connexion = mysqli_connect("localhost", "root", "01r1173");
                $bd = mysqli_select_db($connexion, "Utilisateurs");
                $ins = "DELETE FROM utilisateur_inscrit where id = ?";
                $insp = mysqli_prepare($connexion, $ins);
                $id = $_POST["send"];
                mysqli_stmt_bind_param($insp, 'i', $id);
                mysqli_stmt_execute($insp);
                header("Location: admin_page.php?table=1");
            }
        }
    }
}
else{
    header("Location: ../index.php");
}
?>
