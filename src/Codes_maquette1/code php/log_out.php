<?php
session_start();
if (isset($_SESSION['login'], $_SESSION['access'])){
    unset($_SESSION['login']);
    unset($_SESSION['access']);
    header("Location: index.php");
    session_destroy();
}
else{
    header("Location: index.php");
}
