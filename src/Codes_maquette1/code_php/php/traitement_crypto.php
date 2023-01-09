<?php
session_start();


if (isset($_POST['message'])){
    
    $connexion=mysqli_connect("localhost", "root", "01r1173");
    $bd=mysqli_select_db($connexion, "Utilisateurs");

    if (isset($_POST['chiffrer'])){
        if ($_POST['chiffrer']!=null and $_POST['message']!=null){
            $arg1 = $_POST['message'];
            $arg2 = $_POST['cle'];

            $resultat = exec("python ../python/codage.py $arg1 $arg2"); 

            $ins_chiffrer = "INSERT into crypto_historique(login,action,message,resultat) values(?,?,?,?)";
            $insp_chiffrer = mysqli_prepare($connexion, $ins_chiffrer);
            $login = $_SESSION['login'];
            $action = "chiffrer";
            mysqli_stmt_bind_param($insp_chiffrer, 'ssss', $login, $action, $arg1, $resultat);
            mysqli_stmt_execute($insp_chiffrer);
        }
    }

    if (isset($_POST['dechiffrer'])){
        if ($_POST['dechiffrer']!=null and $_POST['message']!=null){
            $arg1 = $_POST['message'];
            $arg2 = $_POST['cle'];

            $resultat = exec("python ../python/decodage.py $arg1 $arg2"); 
            
            $ins_dechiffrer = "INSERT into crypto_historique(login,action,message,resultat) values(?,?,?,?)";
            $insp_dechiffrer = mysqli_prepare($connexion, $ins_dechiffrer);
            $login = $_SESSION['login'];
            $action = "déchiffrer";
            mysqli_stmt_bind_param($insp_dechiffrer, 'ssss', $login, $action, $arg1, $resultat);
            mysqli_stmt_execute($insp_dechiffrer);
        }
    }


    $select="SELECT module_2 FROM users_stats WHERE login='".$_SESSION['login']."'";
    $res=mysqli_query($connexion, $select);

    $ligne = mysqli_fetch_assoc($res);

    $ins2 = "UPDATE users_stats SET module_2 = ? WHERE login='".$_SESSION['login']."'";
	$insp2 = mysqli_prepare($connexion, $ins2);
    $nb = $ligne['module_2'] + 1;
    mysqli_stmt_bind_param($insp2, 'i', $nb);
	mysqli_stmt_execute($insp2);
}


header("Location: simu_crypto.php?res=$resultat");


?>
