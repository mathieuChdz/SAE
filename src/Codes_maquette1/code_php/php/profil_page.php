<!doctype html>
<html lang="en">
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
        <!-- historique des actions faites pour chaque utilisateur -->
        <div class="table-mdp">
            <h2>Historique des mots de passe</h2>

            <?php
            // connexion à la base de donnée
            $token=(bool)($connexion=mysqli_connect("localhost", "root", "01r1173"));
            
                if ($token){
                    $token2=(bool)($bd=mysqli_select_db($connexion, "Utilisateurs"));
                    #display($connexion);
                    if ($token2){
                        #display($bd);
                        // selection des actions, messages et resultats de l'utilisateur qui fait la simulation
                        $sql="SELECT password FROM users_mdp_historique WHERE login='".$_SESSION['login']."'";
                        $token3=(bool)($res=mysqli_query($connexion,$sql));
                        if ($token3){
                            #display($res);
                            echo "<div class='table-aff'>";
                            // création d'une table. Cela permet de mettre la table avec une taille à 100% ce qui
                            // a pour effet d'adapter la table à la taille de l'écran et donc les éléments dedans aussi
                            echo "<table>";
                            echo "<tr id='first-line'><th>ordre de changement</th><th>mot de passe</th></tr>";

                            // variable utilisée pour l'ordre des actions faites par l'utilisateur
                            $cpt_mdp=0;

                            // parcours et affichage des tuples sélectionnés
                            while ($ligne=mysqli_fetch_row($res)){
                                
                                echo "<tr>";
                                foreach ($ligne as $v){
                                    $cpt_mdp++;
                                    echo "<td>".$cpt_mdp."</td>";
                                    echo "<td>".$v."</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</div>";
                        }
                    }
                }
            
            ?>
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

                //insert le nouveau mot de passe dans la table users_mdp_historique
                $ins2 = "INSERT into users_mdp_historique(login,password) values(?,?)";
                $insp2 = mysqli_prepare($connexion, $ins2);
                $login = $_SESSION['login'];
                mysqli_stmt_bind_param($insp2, 'ss', $login, $new_password);
                mysqli_stmt_execute($insp2);
                header("Location: ../index.php");
            }
            else{
                header("Location: profil_page.php");
            }
        }
        else{
            header("Location: profil_page.php");
        }
    }
    else{
        header("Location: profil_page.php");
    }


}

?>

</html>

