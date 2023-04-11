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

            $mot = ($_POST["mot"]);
            header($mot);
		
		header("Location: admin_page.php?mot=$mot & table=3");
        }
        
    }
}
else{
    header("Location: ../index.php");
}
?>
