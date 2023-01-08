<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/charte_index.css">
</head>


<?php
session_start();
//print_r($_SESSION);
?>

<nav class="navBar">
        <img class="logo" src="images/logo_sans_fond.png">
        <h1>X Simulator</h1>
        <div class="navBar-sim-sub">
            <div class="nav-links">
                <ul>
                    <?php
                        if (isset($_SESSION['login'])){
                            if ($_SESSION["admin"]=="oui"){
                                echo "<li><a href='php/admin_page.php'>admin page</a></li>";
                            }
                        }
                    ?>
                    <li><a href="php/simu_proba.php">Probabilités</a></li>
                    <li><a href="php/simu_crypto.php">Chiffrement</a></li>
                    <li><a href="simulation.html">Simulation 3</a></li>
                    <li>
                    <?php
                        if (isset($_SESSION['login'])){
                            echo "<a href='php/profil_page.php'>profil</a>";
                        }
                    ?>
                    </li>
                    <li>
                    <?php
                        if (isset($_SESSION['login'])){
                            echo "
                            <form action='php/log_out.php'>
                                    <input type='submit' id='button_connexion' value='Se déconnecter'>
                                </form>";
                        }
                        else{
                            echo "
                            <form action='php/page_connexion.php'>
                                    <input type='submit' id='button_connexion' value='Se connecter'>
                                </form>";
                        }
                    ?>
                    </li>
                </ul>
            </div>
            <img src="images/Hamburger_icon.png" alt="menu hamburger" class="menu-hamburger">
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


<div class="explication">
    <div class='text'>
        <!-- text explicatif -->
        <div class="card">
            <div class="circle"></div>
            <div class="content">
                <h2>Présentation</h2>
                <p>Ce site web a pour but de présenter 3 modules de simulation : <br>
                   - Le premier est un module de calcul de probabilité à l'aide de différentes méthodes d'intégrales.<br>
                   - Le deuxième est un module de calcul de chiffrement et déchiffrement d'un message avec le RC4. <br>
                   - Le troisième est un module de ...

                </p>
            </div>
            <img src="images/cercle_explication.png">
        </div>
        
        <div class="card">
            <div class="circle"></div>
            <div class="content">
                <h2>Vidéo de présentation</h2>
                <a target="_blank" href="https://www.youtube.com/embed/-Da8Mf5vg7o">Vidéo de présentation</a>
            </div>
            <img src="images/cercle_video.png">
        </div>

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

