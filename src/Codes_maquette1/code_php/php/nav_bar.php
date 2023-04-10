<!-- barre de navigation -->
<nav class="navBar">
    <img class="logo" src="../images/logo_sans_fond_sans_titre.png" alt="logo du site">
    <a href="../index.php"><h1>X Simulator</h1></a>
    <div class="navBar-sim-sub">
        <div class="nav-links">
            <ul>
                <!-- liste des liens visibles dans la nav bar -->
                <?php
                    if (isset($_SESSION['login'])){
                        // Ajout d'un lien vers la page admin si l'utilisateur est admin
                        if ($_SESSION["admin"]=="oui"){
                            echo "<li><a href='admin_page.php'>Admin Page</a></li>";
                        }
                    }
                ?>
                <li><a href="../php/simu_proba.php">Probabilités</a></li>
                <li><a href="../php/simu_crypto.php">Chiffrement</a></li>
                <li><a href="../php/page_machine_learning.php">Machine Learning</a></li>
                <li>
                    <?php
                        if (isset($_SESSION['login'])){
                            // Ajout d'un lien vers la page profil si l'utilisateur est connecté
                            echo "<a href='../php/profil_page.php'>Profil</a>";
                        }
                    ?>
                </li>
                <li>
                <?php
                    if (isset($_SESSION['login'])){
                        // Si l'utilisateur est connecté, on affiche le bouton pour se déconnecter,
                        // sinon on affiche un bouton pour se connecter
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