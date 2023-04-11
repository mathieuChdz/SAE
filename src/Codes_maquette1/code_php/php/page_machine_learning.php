<?php
session_start();

if (!isset($_SESSION["login"], $_SESSION["admin"])){
    header("Location: page_connexion.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page machine learning</title>
    <link rel="stylesheet" href="../css/charte_machine_learning.css">
    <link rel="stylesheet" href="../css/charte_nav_bar.css">
</head>

<header></header>

<body>
<?php
include 'nav_bar.php';
?>

<div class="ml-titre">
    <h2>Machine learning</h2>
</div>

<div class="form-ml-start">
    <form action="traitement_ml.php" method="post">
        <input type="submit" name="start" value="Executer la simulation">
    </form>
</div>

<div class="resultat">
    <h2>Résultat :</h2>
    <?php
    if (isset($_GET["res"])){

        $res = json_decode($_GET["res"]);

        $phrases = $res[0];
        $sentiments = $res[1];

        echo "<div class='first-line'>
                  <table>
                      <tr>
                        <th id='column-one'>Phrase</th>
                        <th>Sentiment</th>
                      </tr>
                    </table>
                  
                </div>";
        echo "<div class='table-container'>
      <table>
        <tbody>";
        // boucle pour afficher les données du tableau
        for ($i = 0; $i < count($phrases); $i++) {
            echo "<tr>";
            echo "<td id='column-one'>".$phrases[$i]."</td>";
            echo "<td id='column-two'>".$sentiments[$i]."</td>";
            echo "</tr>";
        }
        echo "
        </tbody>
        </table>
    </div>";
    }
    else{
        echo "<p>Veuillez lancer la simulation</p>";
    }

    ?>
</div>



</body>
</html>
