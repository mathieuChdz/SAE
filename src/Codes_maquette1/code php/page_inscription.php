<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Inscription</title>
    <link rel="stylesheet" href="charte_page_inscription.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>

<?php
session_start();
if (isset($_SESSION["login"], $_SESSION["access"])){
	header("Location: index.php");
}
?>

<div class="form-structure">
	<form action=''method='post'>
			<h1>Inscription</h1>
			<div class="form-nom">
				<span class="material-symbols-rounded">badge</span>
				<input type='text' id='nom' name='nom' placeholder="nom" value=''>
			</div>
			<div class="form-prenom">
				<span class="material-symbols-rounded">badge</span>
				<input type='text' id='prenom' name='prenom' placeholder="prénom" value=''>
			</div>
			<div class="form-mail">
				<span class="material-symbols-rounded">mail</span>
				<input type='text' id='email' name='email' placeholder="email" value=''>
			</div>
			<div class="form-mdp">
			<span class="material-symbols-rounded">lock</span>
				<input type='password' id='mdp' name='mdp' placeholder="mot de passe" value=''>
			</div>
			<input type='submit' id='ok' name='ok' value='Créer un compte'>
	</form>
</div>

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
