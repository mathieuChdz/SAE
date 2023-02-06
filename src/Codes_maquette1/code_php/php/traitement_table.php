<?php
session_start();
if (!isset($_SESSION["login"])){
	header("Location: ../index.php");
}

include "traitements_fonctions.php";


if (isset($_SESSION['login'], $_SESSION['admin'])){

    // vérification que le traitement est effectué par l'utilisateur
    if ($_SESSION['admin'] == "oui"){

        if (isset($_POST["send"])){

            // sélection de l'action choisie

            $table = table_choisie($_POST["send"]);
            header($table);
        }
        elseif (isset($_POST["send2"])){

            // suppression d'un utilisateur selectionné
            $connexion = mysqli_connect("localhost", "root", "01r1173");
            $bd = mysqli_select_db($connexion, "Utilisateurs");
            $ins = "DELETE FROM utilisateur_inscrit where id = ?";
            $insp = mysqli_prepare($connexion, $ins);
            $id = intval($_POST["send2"]);
            mysqli_stmt_bind_param($insp, 'i', $id);
            mysqli_stmt_execute($insp);

            header("Location: admin_page.php?table=1");
        }
    }
}
else{
    header("Location: ../index.php");
}
?>
