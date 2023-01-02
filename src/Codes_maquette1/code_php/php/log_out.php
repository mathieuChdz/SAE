<?php
session_start();
if (isset($_SESSION['login'], $_SESSION['admin'])){
    unset($_SESSION['login']);
    unset($_SESSION['admin']);
    header("Location: ../index.php");
    session_destroy();
}
else{
    header("Location: ../index.php");
}
