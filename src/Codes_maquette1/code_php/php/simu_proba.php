<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>proba</title>
    <link rel="stylesheet" href="../css/simu_proba.css">
    <link rel="stylesheet" href="../css/charte_nav_bar.css">
    <script src="../js/graphe.js"></script>
</head>

<?php
session_start();
if (!isset($_SESSION["login"], $_SESSION["admin"])){
	header("Location: page_connexion.php");
}
?>
<?php
    include 'nav_bar.php';
?>

<body>

<div class="table">
  <table>
    <div class="simulation">

      <tr>
        <td>
          <div class="simu-titre">
            <h1>Simulation 1 : Calcul d'intégrales</h1>
          </div>
        </td>

      </tr>
      
      <tr>
        <td>
          <div class="methodes-graphique">
            <div class="methodes">
              <label for="méthodes">Representation graphique des méthodes :</label>
              <div class="methodes-button">
                <input type="button" id="mybutton" onclick="grapheGauche()" value="méthode des rectangles gauches">
                <input type="button" id="mybutton" onclick="grapheDroit()" value="méthode des rectangles droit">
                <input type="button" id="mybutton" onclick="grapheMedians()" value="méthode des rectangles médians">
                <input type="button" id="mybutton" onclick="grapheTrapeze()" value="methode des trapèzes">
                <input type="button" id="mybutton" onclick="grapheSimpson()" value="methode de Simpson">
              </div>
            </div>
          
            <div id="graph" class="graphique">
              <img  src="../images/methode_rec_gauche.png">
            </div>
          </div>
        </td>
      </tr>
      
    </div>

    <tr>
      <td>
        <hr>
      </td>
    </tr>

    <tr>
      <td>
        <div class="saisie">
          <fieldset>
            <form action="traitement_proba.php" method="post">
              <div class="form-structure">
                <div class="methodes-param_1">
                  <label for="methodes_selection">Saisisez la méthodes: </label>
                  <select name="methodes" id="methodes_selection">
                    <option value="">--Choississez une méthode--</option>
                    <option value="mrm">méthode des rectangles médians</option>
                    <option value="mdt">méthode des trapèzes</option>
                    <option value="mds">méthode de Simpson</option>
                  </select>
                </div>

                  <div class="methodes-param_2">

                    <div class="methodes-param_2_1">
                      <label for="m">Saisisez la valeur de m : </label>
                      <input type="text" id="m" name="m"> 
                    </div>

                    <div class="methodes-param_2_2">
                      <label for="e_t">Saisisez la valeur de σ : </label>
                      <input type="text" id="e_t" name="e_t">
                    </div>

                    <div class="methodes-param_2_3">
                      <label for="t">Saisisez la valeur de t : </label>
                      <input type="text" id="t" name="t">
                    </div>
                    
                  </div>

                  <div class="methodes-submit">
                    <input type="submit" id="ok" name="ok" value="Lancer">
                  </div>

              </div>

            </form>
          </fieldset>
          <div class="resultat">
            <h2>Résultat :</h2>
            <?php
                if (isset($_GET["res"])){
                    echo "<p>".$_GET["res"]."</p>";
                }
            ?>
          </div>

        </div>
      </td>
    </tr>
    
    
  </table>
</div>

</body>

<?php
include '../html/script_nav_bar.html';
?>

</html>
