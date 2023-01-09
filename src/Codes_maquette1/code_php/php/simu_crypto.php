<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/charte_simu_crypto_page.css">
    <link rel="stylesheet" href="../css/charte_nav_bar.css">
</head>


<?php
session_start();
if (!isset($_SESSION["login"], $_SESSION["admin"])){
	header("Location: page_connexion.php");
}
else{
?>

    <?php
    include 'nav_bar.php';
    ?>
    <header></header>
    
    <body>
      <div class="simu-titre">
            <h1>Simulation 2 : Cryptographie</h1>
	    </div>

    <div class="saisie-historique">
        <div class="saisie">  
            <fieldset>
                <form action="traitement_crypto.php" method="post">
                    <div class="titre">
                        <label>Saisisez une clé et un message : </label>
                    </div>
                    <div class="cle">
                        <label for="cle">Clé :</label>
                        <input type="text" name="cle">
                    </div>
                    <div class="message">
                        <label for="message">Message :</label>
                        <input type="text" name="message">
                    </div>
                    <div class="bouton">
                        <div class="bouton-chiffrer">
                            <input type="submit"  value="Chiffrer" name="chiffrer">
                        </div>
                        <div class="bouton-dechiffrer">
                            <input type="submit"  value="Déchiffrer" name="dechiffrer">
                        </div>
                    </div>
                    <div class="resultat">
                        <h2>Résultat :</h2>
                        <?php
                        if (isset($_GET["res"])){
                            echo "<p>".$_GET["res"]."</p>";
                        }
                        ?>
                    </div>	    
                </form>
            </fieldset>
        </div>

        <div class="historique">
            <div class="table-crypto">
                <h2>historique</h2>

                <?php
                $token=(bool)($connexion=mysqli_connect("localhost", "root", "01r1173"));
                
                    if ($token){
                        $token2=(bool)($bd=mysqli_select_db($connexion, "Utilisateurs"));
                        #display($connexion);
                        if ($token2){
                            #display($bd);
                            $sql="SELECT action, message, resultat FROM crypto_historique WHERE login='".$_SESSION['login']."'";
                            $token3=(bool)($res=mysqli_query($connexion,$sql));
                            if ($token3){
                                #display($res);
                                echo "<div class='table-aff'>";
                                echo "<table>";
                                echo "<tr id='first-line'><th>ordre de simulation</th><th>action</th><th>message</th><th>resultat</th></tr>";
                                
                                $cpt_mdp=0;
                                while ($ligne=mysqli_fetch_row($res)){
                                    
                                    echo "<tr>";
                                    $cpt_mdp++;
                                    echo "<td>".$cpt_mdp."</td>";
                                    foreach ($ligne as $v){
                                        echo "<td>".$v."</td>";
                                    }
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "</div>";
                            }
                        }
                    }
                
                ?>
            </div>
        </div>
    </div>


    </body>
    
    <?php
    include '../html/script_nav_bar.html';
    ?>
<?php
}
?>
</html>
