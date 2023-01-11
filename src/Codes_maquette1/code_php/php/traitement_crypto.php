<?php
session_start();
if (!isset($_SESSION["login"])){
	header("Location: ../index.php");
}

if (isset($_POST['message'])){
    
    // connexion à la base de donnée
    $connexion=mysqli_connect("localhost", "root", "01r1173");
    $bd=mysqli_select_db($connexion, "Utilisateurs");

    // partie chiffrement
    if (isset($_POST['chiffrer'])){

        // vérification que les variables 'chiffrer' et 'message' ne sont pas nulles
        if ($_POST['chiffrer']!=null and $_POST['message']!=null){

            // vérification que la variable 'cle' n'est pas nulle
            if ($_POST['cle']!=null){
                $arg1 = $_POST['message'];
                $arg2 = $_POST['cle'];
    
                $resultat = exec("python ../python/codage.py $arg1 $arg2"); 
    
                $ins_chiffrer = "INSERT into crypto_historique(login,action,message,resultat) values(?,?,?,?)";
                $insp_chiffrer = mysqli_prepare($connexion, $ins_chiffrer);
                $login = $_SESSION['login'];
                $action = "chiffrer";
                mysqli_stmt_bind_param($insp_chiffrer, 'ssss', $login, $action, $arg1, $resultat);
                mysqli_stmt_execute($insp_chiffrer);
                header("Location: simu_crypto.php?res=$resultat");
            }
            // la variable clé est nulle
            else{
                header("Location: simu_crypto.php?err=1");
            }
        }
        // la variables message est nulle
        else{
            header("Location: simu_crypto.php?err=2");
        }
    }

    // partie déchiffrement
    if (isset($_POST['dechiffrer'])){

        // vérification que les variables 'chiffrer' et 'message' ne sont pas nulles
        if ($_POST['dechiffrer']!=null and $_POST['message']!=null){

            // vérification que la variable 'cle' n'est pas nulle
            if ($_POST['cle']!=null){
                $arg1 = $_POST['message'];
                $arg2 = $_POST['cle'];

                $resultat = exec("python ../python/decodage.py $arg1 $arg2"); 
                
                $ins_dechiffrer = "INSERT into crypto_historique(login,action,message,resultat) values(?,?,?,?)";
                $insp_dechiffrer = mysqli_prepare($connexion, $ins_dechiffrer);
                $login = $_SESSION['login'];
                $action = "déchiffrer";
                mysqli_stmt_bind_param($insp_dechiffrer, 'ssss', $login, $action, $arg1, $resultat);
                mysqli_stmt_execute($insp_dechiffrer);
                header("Location: simu_crypto.php?res=$resultat");
            }
            // la variable clé est nulle
            else{
                header("Location: simu_crypto.php?err=1");
            }
        }
        // la variables message est nulle
        else{
            header("Location: simu_crypto.php?err=2");
        }
    }

    // Incrémente l'attribut 'module_2' de l'utilisateur dans la tables des statistiques
    $select="SELECT module_2 FROM users_stats WHERE login='".$_SESSION['login']."'";
    $res=mysqli_query($connexion, $select);

    $ligne = mysqli_fetch_assoc($res);

    $ins2 = "UPDATE users_stats SET module_2 = ? WHERE login='".$_SESSION['login']."'";
	$insp2 = mysqli_prepare($connexion, $ins2);
    $nb = $ligne['module_2'] + 1;
    mysqli_stmt_bind_param($insp2, 'i', $nb);
	mysqli_stmt_execute($insp2);
}

?>
