<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="charte_page_connexion.css">
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
			<h1>Connexion</h1>
			<div class="form-mail">
				<span class="material-symbols-rounded">mail</span>
				<input type='text' id='email' name='email' placeholder="email" value=''>
			</div>
			<div class="form-mdp">
			<span class="material-symbols-rounded">lock</span>
				<input type='password' id='mdp' name='mdp' placeholder="mot de passe" value=''>
			</div>
			<a href='error_page.php'>mot de passe oublié</a>
			<div class="form-submit">
				<input type='submit' id='ok' name='ok' value='se connecter'>
			</div>
			<p>Pas de compte ? <a href='page_inscription.php'>Créer un compte</a></p>
			<a href='index.php'>retour à l'accueil</a>
	</form>
</div>
<?php
if (isset($_POST["ok"],$_POST["email"],$_POST["mdp"])){

	$connexion=mysqli_connect("localhost", "root", "01r1173");
	$bd=mysqli_select_db($connexion, "Utilisateurs");
	$select="SELECT login, password FROM Utilisateur_inscrit";
	$res=mysqli_query($connexion, $select);
	$flag=false;
	while($ligne = mysqli_fetch_assoc($res)) {
	    if ($_POST["email"]==$ligne["login"] and md5($_POST["mdp"])==$ligne["password"]){
		$flag=true;
		break;
	    }
	}
	if ($flag==true){
	    session_start();
	    $_SESSION["login"] = $_POST["email"];
	    $_SESSION["access"] = "oui";
	    header("Location: index.php");
	}
	else{
	    header("Location: page_connexion.php");
	}
}
?>

</body>
</html>