<?php
session_start();
// vérifie que l'utilisateur est connecté
if (isset($_SESSION['login'], $_SESSION['admin'])){
    
    // vide les variables 'login' et 'admin'
    unset($_SESSION['login']);
    unset($_SESSION['admin']);
    header("Location: ../index.php");
    session_destroy();
}
else{
    header("Location: ../index.php");
}
