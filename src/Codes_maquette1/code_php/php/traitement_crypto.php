<?php
session_start();


if (isset($_POST['message'])){
    if (isset($_POST['chiffrer'])){
        if ($_POST['chiffrer']!=null and $_POST['message']!=null){
            $arg1 = $_POST['message'];
            $arg2 = $_POST['cle'];

            $res = exec("python ../python/codage.py $arg1 $arg2"); 
            
        }
    }

    if (isset($_POST['dechiffrer'])){
        if ($_POST['dechiffrer']!=null and $_POST['message']!=null){
            $arg1 = $_POST['message'];
            $arg2 = $_POST['cle'];

            $res = exec("python ../python/decodage.py $arg1 $arg2"); 
            
        }
    }
}


header("Location: simu_crypto.php?res=$res");


?>
