<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page admin</title>
    <link rel="stylesheet" href="../css/charte_admin_page.css">
    <link rel="stylesheet" href="../css/charte_nav_bar.css">
</head>

<?php
include 'nav_bar.php';
?>
<header></header>

<body>
<?php

if (isset($_SESSION['login'], $_SESSION['admin'])){

    // vérification que le traitement est effectué par un admin
    if ($_SESSION['admin'] == "oui"){

        ?>
        <!-- formulaire des choix des tables -->
        <div class="choix-table">
            <h2>Quelle table voulez-vous afficher ?</h2>
            <form action="traitement_table.php" method="post">
                <input type='submit' id='send' name='send' value='utilisateurs'>
                <input type='submit' id='send' name='send' value='statistiques'>
                <input type='submit' id='send' name='send' value='error log'>
            </form>
        </div>
        <?php

        echo "<link rel='stylesheet' href='../css/charte_admin_page.css'>";
        
        // tableau qui permet la selection du bon tuple qui affiche les attributs de la table selectionnée
        $first_line = array(
            "Utilisateur_inscrit" => '<th>id</th><th>login</th><th>nom</th><th>prenom</th><th>supprimer</th>',
            "users_stats" => '<th>id</th><th>login</th><th>module 1</th><th>module 2</th><th>module 3</th>',
            "users_log"   => '<th>id</th><th>login</th><th>password</th><th>adresse_ip</th><th>date</th>'
        );


        if (isset($_GET["table"])){

            // selection de la table 1 (Utilisateurs_inscrits)
            if ($_GET["table"]==1){
                $table = 'Utilisateur_inscrit';
                $titre = 'liste des utilisateurs inscrits';
                $requete = "SELECT * FROM $table";
            }

            // selection de la table 2 (users_stats)
            elseif ($_GET["table"]==2){
                $table = 'users_stats';
                $titre = 'liste des statistiques';
                $requete = "SELECT * FROM $table";

            }

            // selection de la table 3 (error_log)
            elseif ($_GET["table"]==3){
                $table = 'users_log';
                $titre = 'liste des tentatives ratées';
                $requete = "SELECT * FROM $table";
            }

            // selection d'un table choisie avec un motif
            elseif ($_GET["table"]==4){
                $table = str_replace("'", "", $_GET["table_nom"]);
                $titre = $_GET["nom"];
                $requete = "SELECT * FROM $table where login like '".str_replace("'", "", $_GET["nom"])."%'"." order by login";
            }
        }
        else{
            // selection par défaut
            $table = 'Utilisateur_inscrit';
            $titre = 'liste des utilisateurs inscrits';
            $requete = "SELECT * FROM $table";

        }

        // connexion à la base de donnée
        $token=(bool)($connexion=mysqli_connect("localhost", "root", "01r1173"));
        
        if ($token){
            $token2=(bool)($bd=mysqli_select_db($connexion, "Utilisateurs"));

            if ($token2){
            
                $sql=$requete;
                // execution de la requete SQL
                $token3=(bool)($res=mysqli_query($connexion,$sql));
                if ($token3){
                    echo "<div class='table-aff'>";
                    echo "<h2>".$titre."</h2>";
                    // création de la barre de recherche
                    echo "
                    <div class='choix-tuple'>
                        <form action='traitement_table.php' method='post'>
                            <input type='hidden' name='table' value='$table'>
                            <label for='mot' hidden='hidden'>mot de recherches</label>
                            <input type='text' id='mot' name='mot' placeholder='mot de recherche'>
                            <input type='submit' id='send' name='send' value='rechercher'>
                    </div>";
                    echo "<table>";
                    // ici, la variable table et définie en fonction de la table choisie. Ensuite, on selectionne 
                    // dans le tableau first-line la valeur de l'élement ayant pour clé $table.
                    echo "<tr id='first-line'>".$first_line[$table]."</tr>";
                    while ($ligne=mysqli_fetch_row($res)){
                        echo "<tr>";
                        
                        $cpt_mdp=0;
                        
                        // parcours des lignes et affichage des lignes
                        foreach ($ligne as $v){ 
                            $cpt_mdp ++;
                            if ($cpt_mdp != 3){
                                echo "<td>".$v."</td>";
                            }
                            elseif ($cpt_mdp == 3){
                                if (isset($_GET["table"])){
                                    if ($_GET["table"]!=1){
                                        echo "<td>".$v."</td>";
                                    }
                                }                            }
                            if ($cpt_mdp == 5){
                                if (isset($_GET["table"])){
                                    // créer une cellule supprimer si la table est égale à 1
                                    if ($_GET["table"]==1){
                                        ?>
                                        <td>                                        
                                            <form action="traitement_table.php" method="post">
                                                supprimer : <input type="submit" id="<?php echo $ligne[0]?>" name="send2" value="<?php echo $ligne[0]?>">
                                            </form>
                                        </td>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <td>                                        
                                        <form action="traitement_table.php" method="post">
                                           supprimer : <input type="submit" id="<?php echo $ligne[0]?>" name="send2" value="<?php echo $ligne[0]?>">
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
    header("Location: ../index.php");
}



?>
</body>

<?php
include '../html/script_nav_bar.html';
?>

</html>
