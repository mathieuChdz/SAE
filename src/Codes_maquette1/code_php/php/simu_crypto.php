<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/charte_profil_page.css">
</head>


<?php
session_start();
if (!isset($_SESSION["login"], $_SESSION["admin"])){
	header("Location: page_connexion.php");
}
else{
?>

    <nav class="navBar">
            <img class="logo" src="../images/logo_sans_fond.png">
            <h1>X Simulator</h1>
            <div class="navBar-sim-sub">
                <div class="nav-links">
                    <ul>
                        <?php
                            if (isset($_SESSION['login'])){
                                if ($_SESSION["admin"]=="oui"){
                                    echo "<li><a href='admin_page.php'>admin page</a></li>";
                                }
                            }
                        ?>
                        <li><a href="simu_proba.php">Simulation proba</a></li>
                        <li><a href="simu_crypto.php">Chiffrement</a></li>
                        <li><a href="simulation.html">Simulation 3</a></li>
                        <li>
                        <?php
                            if (isset($_SESSION['login'])){
                                echo "<a href='profil_page.php'>profil</a>";
                            }
                        ?>
                        </li>
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
                <img src="../images/Hamburger_icon.png" alt="menu hamburger" class="menu-hamburger">
            </div>      
        </nav>
        <header></header>
    
    <body>
    
    </body>
    
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")
    
        menuHamburger.addEventListener('click',()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>
<?php
}
?>
</html>