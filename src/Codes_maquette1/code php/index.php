<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="charte_index.css">
</head>


<?php
session_start();
//print_r($_SESSION);
?>

<header>

<!-- lien vers les simulations-->
<nav>
    <img src='logo_sans_fond.png'>
    <h1>X Simulator</h1>
    <a href='simulation.php'>Simulation 1</a>
    <a href='simulation.php'>Simulation 2</a>
    <a href='simulation.php'>Simulation 3</a>
    <div id='button_form'>
<?php
	if (isset($_SESSION['login'])){
		echo "
		<form action='log_out.php'>
        		<input type='submit' id='button_connexion' value='Se déconnecter'>
    		</form>";
	}
	else{
		echo "
		<form action='page_connexion.php'>
        		<input type='submit' id='button_connexion' value='Se connecter'>
    		</form>";
	}
?>

    </div>
</nav>
</header>
<body>
<h4> Exemple de vidéo de démonstration du site : </h4>
<div class='text'>
    <!-- text explicatif -->
    <p> test du texte 
    </p>
    <!-- video de démonstration -->
    <iframe width='560' height='315' src='https://www.youtube.com/embed/-Da8Mf5vg7o' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>


</div>
</body>
</html>