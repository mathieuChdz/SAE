<?php

session_start();
if (!isset($_SESSION["login"])){
    header("Location: ../index.php");
}

if (isset($_POST['start'])){
            $res = exec("python ../machineLearning/notebook/moduleML.py");

            header("Location: page_machine_learning.php?res=$res");
}