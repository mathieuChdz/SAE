<?php
session_start();
if (isset($_SESSION['login'], $_SESSION['admin'])){
    
    if ($_SESSION['admin'] == "oui"){

        if (isset($_POST["send"])){
            if ($_POST["send"] == 'utilisateurs') {
                header("Location: admin_page.php?table=1");
            }
        
            elseif ($_POST["send"] == 'statistiques') {
                header("Location: admin_page.php?table=2");
            }
            
            elseif ($_POST["send"] == 'error log') {
                header("Location: admin_page.php?table=3");
            }

            elseif ($_POST["send"] == 'rechercher') {
                header("Location: admin_page.php?table=4&nom='".$_POST["mot"]."'&table_nom='".$_POST["table"]."'");
            }

        else{
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
