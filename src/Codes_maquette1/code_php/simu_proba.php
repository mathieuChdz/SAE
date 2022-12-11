<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>proba</title>
    <link rel="stylesheet" href="simu_proba.css">
    <script src="graphe.js"></script>
</head>

<?php
session_start();
if (!isset($_SESSION["login"], $_SESSION["admin"])){
	header("Location: page_connexion.php");
}
?>

<body>
<nav class="navBar">
  <img class="logo" src="logo_sans_fond.png">
  <h1>X Simulator</h1>
  <form action="index.php">
  	<input type="submit" value="Accueil">
  </form>
</nav>

<div class="simulation">
  <div class="simu-titre">
    <h1>Simulation 1 : Calcul d'intégrales</h1>
  </div>
  <div class="methodes-graphique">
    <div class="methodes">
      <label for="méthodes">Representation graphique des méthodes :</label>
      <div class="methodes-button">
        <input type="button" id="mybutton" onclick="grapheGauche()" value="méthode des rectangles gauches">
        <input type="button" id="mybutton" onclick="grapheDroit()" value="méthode des rectangles droit">
        <input type="button" id="mybutton" onclick="grapheMedians()" value="méthode des rectangles médians">
        <input type="button" id="mybutton" onclick="grapheTrapeze()" value="methode des trapèzes">
        <input type="button" id="mybutton" onclick="grapheSimpson()" value="methode de Simpson">
      </div>


    </div>
    <div id="graph" class="graphique">
      <img  src="methode_rec_gauche.png">
    </div>
  </div>
</div>
<hr>
<div class="Saisie">
  <form action="" method="post">
    <div class="form-structure">
      <div class="methodes-param">
        <label for="methodes_selection">Saisisez la méthodes: </label>
        <select name="methodes" id="methodes_selection">
          <option value="">--Choississez une méthode--</option>
          <option value="mrm">méthode des rectangles médians</option>
          <option value="mdt">méthode des trapèzes</option>
          <option value="mds">méthode de Simpson</option>

        </select>
      </div>
      <div class="methodes-param-submit">
	      <div class="methodes-param">
		<label for="m">Saisisez la valeur de m : </label>
		<input type="text" id="m" name="m">

		<label for="e_t">Saisisez la valeur de σ : </label>
		<input type="text" id="e_t" name="e_t">

		<label for="t">Saisisez la valeur de t : </label>
		<input type="text" id="t" name="t">
	    </div>
	    <div class="methodes-submit">
	      <input type="submit" id="ok" name="ok" value="Lancer">
	    </div>
      </div>

  </form>
</div>

<?php
if (isset($_POST['ok'], $_POST['e_t'], $_POST['t'], $_POST['m'], $_POST['methodes'])){
  if ($_POST['ok']!=null and $_POST['e_t']!=null and $_POST['t']!=null and $_POST['m']!=null and $_POST['methodes']!=null){
    $arg1 = $_POST['t'];
    $arg2 = $_POST['m'];
    $arg3 = $_POST['e_t'];
    if ($_POST['methodes'] == "mrg"){
      $res = exec("python rectangle_gauche.py $arg1 $arg2 $arg3");
      print($res);
    }
    if ($_POST['methodes'] == "mrd"){
      $res = exec("python rectangle_droit.py $arg1 $arg2 $arg3");
      print($res);
    }
    if ($_POST['methodes'] == "mrm"){
      $res = exec("python rectangle_medians.py $arg1 $arg2 $arg3");
      print($res);
    }
    if ($_POST['methodes'] == "mdt"){
      $res = exec("python trapeze.py $arg1 $arg2 $arg3");
      print($res);
    }
    if ($_POST['methodes'] == "mds"){
      $res = exec("python simpson.py $arg1 $arg2 $arg3");
      print($res);
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
}
?>

</body>
</html>
