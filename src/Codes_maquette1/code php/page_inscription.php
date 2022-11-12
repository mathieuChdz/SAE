<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="charte_page_inscription.css">
</head>
<body>

<?php
session_start();
if (isset($_SESSION["login"], $_SESSION["access"])){
	header("Location: index.php");
}
?>

<form action='' method='post'>
    <fieldset>
        <h1>Inscription</h1>
        <label for='nom'>Nom :</label>
        <input type='text' id='nom' name='nom' value=''><br>
        <label for='prenom'>Prenom :</label>
        <input type='text' id='prenom' name='prenom' value=''><br>
        <label for='email'>email :</label>
        <input type='text' id='email' name='email' value=''><br>
        <label for='mdp'>Mot de passe :</label>
        <input type='password' id='mdp' name='mdp' value=''><br><br>
        <input type='submit' id='ok' name='ok' value='Creer un compte'>
    </fieldset>
</form>

<?php
if (isset($_POST['ok'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'])){

	$flag=true;
	foreach ($_POST as $k => $v) {
		$$k = $v;
		if ($v==null || !$v){
			$flag=false;
			break;
		}
	}
	
	if ($flag){
		foreach ($_POST as $k => $v) {
		    $$k = $v;
		}

		$connexion = mysqli_connect("localhost", "root", "");
		$bd = mysqli_select_db($connexion, "Utilisateurs");
		$ins = "INSERT into Utilisateur_inscrit(login,password,nom,prenom) values(?,?,?,?)";
		$insp = mysqli_prepare($connexion, $ins);
		$password_md5 = md5($mdp);
		mysqli_stmt_bind_param($insp, 'ssss', $email, $password_md5, $nom, $prenom);
		mysqli_stmt_execute($insp);

		header("Location: page_connexion.php");
	}

	else{
		echo "Veuillez remplir tous les champs !";
	}

}
?>

</body>
</html>
