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

            elseif ($_POST["send"] == 'supprimer') {
                echo "suiiiiiiiii";
                print_r($_POST);
            }
        }
    }
}
else{
    header("Location: index.php");
}
?>