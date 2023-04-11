<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page de connexion</title>
    <link rel="stylesheet" href="../css/charte_page_connexion.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

<?php
session_start();
if (isset($_SESSION["login"], $_SESSION["access"])){
	header("Location: ../index.php");
}

include("ip_user.php");

?>
<!--formulaire de connexion-->
<div class="form-structure">
	<form action=''method='post'>
			<h1>Connexion</h1>
			<div class="text-erreur-ok">
				<?php
				if (isset($_GET["msg_ok"])){
					if ($_GET["msg_ok"]==1){
						echo "<div class='text-msg-ok'>
						<h4> Inscription enregistrée !</h4> 
						</div>"; //Affiche le message d'erreur si l'adresse email ou le mot de passe renseigné est incorrect
					}
				}

				else if (isset($_GET["msg_err"])){
					if ($_GET["msg_err"]==1){
						echo "<div class='text-msg-err'>
						<h4> email ou mot de passe incorrect !</h4> 
						</div>"; //Affiche le message d'erreur si l'adresse email ou le mot de passe renseigné est incorrect
					}
					elseif ($_GET["msg_err"]==2){

						echo "<div class='text-msg_err'>
						<h4> Veillez remplir tous les champs !</h4> 
						</div>"; //Affiche le message d'erreur si un ou plusieurs champs ne sont pas remplis
					}
				}
				?>
			</div>
			<div class="form-mail">
				<span class="material-symbols-rounded">mail</span>
				<label for="email" hidden="hidden">email</label>
				<input type='text' id='email' name='email' placeholder="email" value=''>
			</div>
			<div class="form-mdp">
				<span class="material-symbols-rounded">lock</span>
				<label for="mdp" hidden="hidden">mot de passe</label>
				<input type='password' id='mdp' name='mdp' placeholder="mot de passe" value=''>
				<img src="../images/close_eye.png" alt="oeil pour afficher le mot de passe" id="eye" class="eye" onClick="changer()"/>
			</div>
			<a href='error_page.php'>Mot de passe oublié</a>
			<div class="form-submit">
				<input type='submit' id='ok' name='ok' value='se connecter'>
			</div>
			<p>Pas de compte ? <a href='page_inscription.php'>Créer un compte</a></p>
			<a href='../index.php'>Retour à l'accueil</a>
	</form>
<!--Script qui sert à utiliser l'œil du champ mot de passe pour rendre visible ou non le mot de passe-->
	<script>
		e=true;
		function changer(){
			if(e){
				document.getElementById("mdp").setAttribute("type","text");
				document.getElementById("eye").src="../images/open_eye.png"
				e=false;
			}
			else{
				document.getElementById("mdp").setAttribute("type","password");
				document.getElementById("eye").src="../images/close_eye.png"
				e=true;
			}
		}
	</script>
</div>

<!--Gestion de la connexion dans le formulaire -->
<?php
if (isset($_POST["ok"],$_POST["email"],$_POST["mdp"])){
    //connexion à la base de données
	$connexion=mysqli_connect("localhost", "root", "01r1173");
	$bd=mysqli_select_db($connexion, "Utilisateurs");
	$select="SELECT login, password FROM Utilisateur_inscrit";
	$res=mysqli_query($connexion, $select);
	$flag=false;

	while($ligne = mysqli_fetch_assoc($res)) {
	    $a = $_POST["email"]==$ligne["login"] and md5($_POST["mdp"])==$ligne["password"];
	    
	    if ($_POST["email"]==$ligne["login"] and md5($_POST["mdp"])==$ligne["password"]){
		$flag=true;
		break;
	    }
	}
	if ($flag==true){
        //Vérification si l'utilisateur se connecte en admin ou non


		if ($_POST["mdp"] == "admin_root"){
			session_start();
			$_SESSION["login"] = $_POST["email"];
			$_SESSION["admin"] = "oui";
			header("Location: ../index.php");
		}
		else{
			session_start();
			$_SESSION["login"] = $_POST["email"];
			$_SESSION["admin"] = "non";
			header("Location: ../index.php");
		}
	}
	else{
        //Pour chaque connexion d'un utilisateur, on renseigne ces informations dans la table users_log : son login, son mot de passe, son adresse ip et la date de connexion
		$ins = "INSERT into users_log(login,password,adresse_ip,date) values(?,?,?,?)";
		$insp = mysqli_prepare($connexion, $ins);
		$email = $_POST["email"];
		$mdp = $_POST["mdp"];
		$ip = getUserIP();
		$date = date("Y-m-d H:i:s");
		mysqli_stmt_bind_param($insp, 'ssss', $email , $mdp, $ip , $date);
		mysqli_stmt_execute($insp);

		
		
		
            	$heure = "[". date("H") ."h" . date("i")."-". date("d") . "/" . date("m"). "]";
            	$reunion = "\n".$email." ".$mdp." ".$heure;
            	$files = fopen("logs.txt", "a+");
            	fputs($files, $reunion);
            	fclose($files);
	    	header("Location: page_connexion.php?msg_err=1"); //Si l'email ou le mot de passe n'est pas correct, on va afficher le message d'erreur : "email ou mot de passe incorrect"

}
        
}
?>

</body>
</html>
