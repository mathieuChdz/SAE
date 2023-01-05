<nav class="navBar">
    <img class="logo" src="../images/logo_sans_fond.png">
    <a href="../index.php"><h1>X Simulator</h1></a>
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
                <li><a href="../php/simu_proba.php">Probabilités</a></li>
                <li><a href="../php/simu_crypto.php">Chiffrement</a></li>
                <li><a href="simulation.html">Simulation 3</a></li>
                <li>
                    <?php
                        if (isset($_SESSION['login'])){
                            echo "<a href='../php/profil_page.php'>profil</a>";
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