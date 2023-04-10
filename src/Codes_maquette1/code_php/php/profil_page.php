<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page de profil</title>
    <link rel="stylesheet" href="../css/charte_profil_page.css">
    <link rel="stylesheet" href="../css/charte_nav_bar.css">
</head>


<?php
session_start();
//print_r($_SESSION);
if (isset($_SESSION['login'], $_SESSION['admin'])){
    ?>

    <?php
    include 'nav_bar.php';
    ?>
    <header></header>
    
    <body>
    <!-- formulaire de saisie  -->
    <div class="form-table">
    
        <div class="form-mdp">
            <form action="" method="post">
                <div class="text-ok-erreur">
                    <?php
                    if (isset($_GET["msg_ok"])){
                        if ($_GET["msg_ok"]==1) {
                            echo "<div class='text-ok-h4'>
                                <h4> Le mot de passe a bien été changé !</h4> 
                            </div>";//Affiche le message d'erreur si l'adresse email ou le mot de passe renseigné est incorrect
                        }
                    }
                    else if (isset($_GET["msg_err"])){
                        if ($_GET["msg_err"]==1){
                            echo "<div class='text-ok-h4'>
                                <h4 class='text-err-h4'> email ou mot de passe incorrect !</h4> 
                            </div>";//Affiche le message d'erreur si l'adresse email ou le mot de passe renseigné est incorrect
                        }
                        elseif ($_GET["msg_err"]==2){
                            echo "<div class='text-ok-h4'>
                                <h4 class='text-err-h4'> email ou mot de passe incorrect !</h4> 
                            </div>";//Affiche le message d'erreur si un ou plusieurs champs ne sont pas remplis

                        }
                    }
                    ?>
                </div>
                <h3>Changer de mot de passe</h3>
                <div class="form-mdp-mdp1">
                    <label for="mdp_actu">Mot de passe actuel</label>
                    <input type="password" name="mdp_actu" id="mdp_actu">
                </div>
                <div class="form-mdp-mdp2">
                    <label for="new_mdp">Nouveau mot de passe</label>
                    <input type="password" name="new_mdp" id="new_mdp">
                </div>
                <div class="form-mdp-mdp3">
                    <label for="new_mdp_verif">Confirmer le mot de passe</label>
                    <input type="password" name="new_mdp_verif" id="new_mdp_verif">
                </div>
                <div class="form-submit">
                    <input type="submit" name="send" id="send" value="Enregistrer">
                </div>
                
    
            </form>
        </div>

    </div>
    
    </body>
    
    <?php
    include '../html/script_nav_bar.html';
    ?>
<?php
}
else{
    header("Location: ../index.php");
}

if (isset($_POST["send"],$_POST["mdp_actu"],$_POST["new_mdp"],$_POST["new_mdp_verif"])){
    //vérifie si le nouveau mot de passe est bien différent de celui actuel de l'utilisateur
    if ($_POST["new_mdp"] != $_POST["mdp_actu"]){
        if ($_POST["new_mdp"] == $_POST["new_mdp_verif"]){
            $connexion=mysqli_connect("localhost", "root", "01r1173");
            $bd=mysqli_select_db($connexion, "Utilisateurs");
            $select="SELECT login, password FROM Utilisateur_inscrit WHERE login='".$_SESSION['login']."'";
            $res=mysqli_query($connexion, $select);

            $ligne = mysqli_fetch_assoc($res);
            //change le mot de passe actuel avec le nouveau mot de passe
            if (md5($_POST["mdp_actu"]) == $ligne["password"]){
                $ins = "UPDATE utilisateur_inscrit SET password = ? WHERE login='".$_SESSION['login']."'";
                $insp = mysqli_prepare($connexion, $ins);
                $new_password = $_POST["new_mdp"];
                $new_password_md5 = md5($new_password);
                mysqli_stmt_bind_param($insp, 's', $new_password_md5);
                mysqli_stmt_execute($insp);
                header("Location: profil_page.php?msg_ok=1");
            }
            else{
                header("Location: profil_page.php?msg_err=1");
            }
        }
        else{
            header("Location: profil_page.php?msg_err=2");
        }
    }
    else{
        header("Location: profil_page.php?msg_err=3");
    }


}

?>

</html>

