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
			<div class="text-erreur">
				<?php
				if (isset($_GET["msg_err"])){
					if ($_GET["msg_err"]==1){
						echo "<h4> Veillez remplir tous les champs !</h4>";
					}
				}
				?>
			</div>
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
	<a href='page_connexion.php'>retour page connexion</a>
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

		$connexion = mysqli_connect("localhost", "root", "01r1173");
		$bd = mysqli_select_db($connexion, "Utilisateurs");
		$ins = "INSERT into Utilisateur_inscrit(login,password,nom,prenom) values(?,?,?,?)";
		$insp = mysqli_prepare($connexion, $ins);
		$password_md5 = md5($mdp);
		mysqli_stmt_bind_param($insp, 'ssss', $email, $password_md5, $nom, $prenom);
		mysqli_stmt_execute($insp);

		$ins2 = "INSERT into users_stats(login,module_1,module_2,module_3) values(?,?,?,?)";
		$insp2 = mysqli_prepare($connexion, $ins2);
		$modules_init = 0;
		mysqli_stmt_bind_param($insp2, 'siii', $email, $modules_init, $modules_init, $modules_init);
		mysqli_stmt_execute($insp2);

		header("Location: page_connexion.php");
	}

	else{
		header("Location: page_inscription.php?msg_err=1");
	}

}
?>

</body>
</html>
