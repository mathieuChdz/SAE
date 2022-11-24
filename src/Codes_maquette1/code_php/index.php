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

<nav class="navBar">
        <img class="logo" src="logo_sans_fond.png">
        <h1>X Simulator</h1>
        <div class="navBar-sim-sub">
            <div class="nav-links">
                <ul>
                    <li><a href="simu_proba.php>Simulation 1</a></li>
                    <li><a href="simulation.html">Simulation 2</a></li>
                    <li><a href="simulation.html">Simulation 3</a></li>
                    <li>
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
                    </li>
                </ul>
            </div>
            <img src="Hamburger_icon.png" alt="menu hamburger" class="menu-hamburger">
        </div>      
    </nav>
    <header></header>

<body>

<div class="text-welcome">
    <?php
        if (isset($_SESSION['login'])){
            $prenom=$_SESSION['login'];
            echo "<h1>Bienvenue sur X Simulator $prenom !</h1>";
        }
        else{
            echo "<h1>Bienvenue sur X Simulator</h1>";
        }
    ?>
</div>

<h4> Exemple de vidéo de démonstration du site : </h4>

<div class="explication">
    <div class='text'>
        <!-- text explicatif -->
        <p> test du texte
        </p>
    </div>
    <!-- video de démonstration -->
    <div class="video">
        <iframe width='560' height='315' src='https://www.youtube.com/embed/-Da8Mf5vg7o' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
    </div>

</div>
</body>

<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-links")

    menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
    })
</script>

</html>