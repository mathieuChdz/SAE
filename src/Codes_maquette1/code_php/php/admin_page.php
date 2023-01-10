<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
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

    if ($_SESSION['admin'] == "oui"){

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

        echo "<link rel='stylesheet' href='../css/charte_admin_page.css'>";
        
        $first_line = array(
            "Utilisateur_inscrit" => '<th>id</th><th>login</th><th>nom</th><th>prenom</th><th>supprimer</th>',
            "users_stats" => '<th>id</th><th>login</th><th>module 1</th><th>module 2</th><th>module 3</th>',
            "users_log"   => '<th>id</th><th>login</th><th>password</th><th>adresse_ip</th><th>date</th>'
        );


        if (isset($_GET["table"])){

            if ($_GET["table"]==1){

                $table = 'Utilisateur_inscrit';
                $titre = 'liste des utilisateurs inscrits';
                $requete = "SELECT * FROM $table";
            }
            elseif ($_GET["table"]==2){
                $table = 'users_stats';
                $titre = 'liste des statistiques';
                $requete = "SELECT * FROM $table";

            }
            elseif ($_GET["table"]==3){
                $table = 'users_log';
                $titre = 'liste des tentatives ratées';
                $requete = "SELECT * FROM $table";
            }

            elseif ($_GET["table"]==4){
                $table = str_replace("'", "", $_GET["table_nom"]);
                $titre = $_GET["nom"];
                $requete = "SELECT * FROM $table where login like '".str_replace("'", "", $_GET["nom"])."%'"." order by login";
            }
        }
        else{
            $table = 'Utilisateur_inscrit';
            $titre = 'liste des utilisateurs inscrits';
            $requete = "SELECT * FROM $table";

        }

        $token=(bool)($connexion=mysqli_connect("localhost", "root", "01r1173"));
        
        if ($token){
            $token2=(bool)($bd=mysqli_select_db($connexion, "Utilisateurs"));

            if ($token2){
            
                $sql=$requete;
                $token3=(bool)($res=mysqli_query($connexion,$sql));
                if ($token3){
                    echo "<div class='table-aff'>";
                    echo "<h2>".$titre."</h2>";
                    echo "
                    <div class='choix-tuple'>
                        <form action='traitement_table.php' method='post'>
                            <input type='hidden' name='table' value='$table'>
                            <input type='text' id='mot' name='mot' placeholder='mot de recherche'>
                            <input type='submit' id='send' name='send' value='rechercher'>
                    </div>";
                    echo "<table>";
                    echo "<tr id='first-line'>".$first_line[$table]."</tr>";
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
                                    if ($_GET["table"]!=1){
                                        echo "<td>".$v."</td>";
                                    }
                                }                            }
                            if ($cpt_mdp == 5){
                                if (isset($_GET["table"])){
                                    if ($_GET["table"]==1){
                                        ?>
                                        <td>                                        
                                            <form action="traitement_table.php" method="post">
                                                <input type="submit" id="<?php echo $ligne[0]?>" name="send" value="<?php echo $ligne[0]?>">
                                            </form>
                                        </td>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <td>                                        
                                        <form action="traitement_table.php" method="post">
                                           supprimer : <input type="submit" id="<?php echo $ligne[0]?>" name="send" value="<?php echo $ligne[0]?>">
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