<?php

session_start();
if (!isset($_SESSION["login"], $_SESSION["admin"])){
	header("Location: index.php");
}

if (isset($_POST['ok'], $_POST['e_t'], $_POST['t'], $_POST['m'], $_POST['methodes'])){
  if ($_POST['ok']!=null and $_POST['e_t']!=null and $_POST['t']!=null and $_POST['m']!=null and $_POST['methodes']!=null){
    $arg1 = $_POST['t'];
    $arg2 = $_POST['m'];
    $arg3 = $_POST['e_t'];

    if ($_POST['methodes'] == "mrm"){
      $res = exec("python ../python/rectangle_medians.py $arg1 $arg2 $arg3");
      header("Location: simu_proba.php?res=$res");

    }
    if ($_POST['methodes'] == "mdt"){
      $res = exec("python ../python/trapeze.py $arg1 $arg2 $arg3");
      header("Location: simu_proba.php?res=$res");
    }

    if ($_POST['methodes'] == "mds"){
      $res = exec("python ../python/simpson.py $arg1 $arg2 $arg3");
      header("Location: simu_proba.php?res=$res");
    }

    unset($_POST);


    $connexion=mysqli_connect("localhost", "root", "01r1173");
    $bd=mysqli_select_db($connexion, "Utilisateurs");
    $select="SELECT module_1 FROM users_stats WHERE login='".$_SESSION['login']."'";
    $res=mysqli_query($connexion, $select);

    $ligne = mysqli_fetch_assoc($res);

    $ins2 = "UPDATE users_stats SET module_1 = ? WHERE login='".$_SESSION['login']."'";
		$insp2 = mysqli_prepare($connexion, $ins2);
    $nb = $ligne['module_1'] + 1;
    mysqli_stmt_bind_param($insp2, 'i', $nb);
		mysqli_stmt_execute($insp2);
  }
  else{
    header("Location: simu_proba.php");
  }
}
else{
    header("Location: simu_proba.php");
}
?>