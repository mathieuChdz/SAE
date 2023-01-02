<?php
session_start();
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="charte_admin_page.css">
    <script src="supprimer.js"></script>
</head>

<nav class="navBar">
    <img class="logo" src="images/logo_sans_fond.png">
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
                <li><a href="simu_proba.php">Simulation 1</a></li>
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
        <img src="images/Hamburger_icon.png" alt="menu hamburger" class="menu-hamburger">
    </div>      
</nav>
<header></header>

<body>
<?php

if (isset($_SESSION['login'], $_SESSION['admin'])){

    if ($_SESSION['admin'] == "oui"){

        ?>
        <?php
            $connexion = mysqli_connect("localhost", "root", "01r1173");
            $bd=mysqli_select_db($connexion,"Utilisateurs");
            $select = 'SELECT * FROM utilisateur_inscrit';
            $recupUsers = mysqli_query($connexion,$select);
            while($user = mysqli_fetch_row($recupUsers)){
                ?>
                <p><?= $user['login']; ?> <a href="supprimer_user_2.php?id=<?= $user['id']; ?>" style="text-decoration: none">Suppprimer</a></p>
                <?php
            }
        ?>
        <div class="choix-table">
            <h2>Quelle table voulez-vous afficher ?</h2>
            <form action="traitement_table.php" method="post">
                <input type='submit' id='send' name='send' value='utilisateurs'>
                <input type='submit' id='send' name='send' value='statistiques'>
                <input type='submit' id='send' name='send' value='error log'>
            </form>
        </div>
        <?php


        echo "<link rel='stylesheet' href='charte_admin_page.css'>";
    
        if (isset($_GET["table"])){
            if ($_GET["table"]==1){
                $table = 'Utilisateur_inscrit';
                $titre = 'liste des utilisateurs inscrits';
                $first_line = '<th>id</th><th>login</th><th>nom</th><th>prenom</th><th>supprimer</th>';
            }
            elseif ($_GET["table"]==2){
                $table = 'Utilisateur_inscrit';
                $titre = 'liste des statistiques';
                $first_line = '<th>id</th><th>login</th><th>nom</th><th>prenom</th>';

            }
            elseif ($_GET["table"]==3){
                $table = 'users_log';
                $titre = 'liste des tentatives ratées';
                $first_line = '<th>id</th><th>login</th><th>password</th><th>adresse_ip</th><th>date</th>';


            }
        }
        else{
            $table = 'Utilisateur_inscrit';
            $titre = 'liste des utilisateurs inscrits';
            $first_line = '<th>id</th><th>login</th><th>nom</th><th>prenom</th><th>supprimer</th>';

        }

        $token=(bool)($connexion=mysqli_connect("localhost", "root", "01r1173"));
        
        if ($token){
            $token2=(bool)($bd=mysqli_select_db($connexion, "Utilisateurs"));
            #display($connexion);
            if ($token2){
                #display($bd);
                $sql="SELECT * FROM $table";
                $token3=(bool)($res=mysqli_query($connexion,$sql));
                if ($token3){
                    #display($res);
                    echo "<div class='table-aff'>";
                    echo "<h2>".$titre."</h2>";
                    echo "<table>";
                    echo "<tr id='first-line'>".$first_line."</tr>";
                    while ($ligne=mysqli_fetch_row($res)){
                        echo "<tr>";
                        
                        $cpt_mdp=0;
                        foreach ($ligne as $v){ 
                            $cpt_mdp ++;
                            if ($cpt_mdp != 3){
                                echo "<td>".$v."</td>";
                            }
                            elseif ($cpt_mdp == 3){
                                if (isset($_GET["table"])){
                                    if ($_GET["table"]==3){
                                        echo "<td>".$v."</td>";
                                    }
                                }                            }
                            if ($cpt_mdp == 5){
                                if (isset($_GET["table"])){
                                    if ($_GET["table"]==1){
                                        ?>
                                        <td>                                        
                                            <form action="supprimer_user_2.php" method="post">
                                                <input type="submit" id="<?php echo $ligne[0]?>" name="send" value="supprimer">
                                            </form>
                                        </td>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <td>                                        
                                        <form action="supprimer_user_2.php" method="post">
                                           <input type="submit" id="<?php echo $ligne[0]?>" name="send" value="supprimer">
                                        </form>
                                    </td>
                                    <?php
                                }
                            }
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                }
            }
        }
    }

}
else{
    header("Location: index.php");
}



?>
</body>
</html>