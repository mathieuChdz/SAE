<?php
session_start();
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

<div>
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
    }
    echo "<div class='table-container'>
      <table>
        <thead>
          <tr>
            <th>Phrase</th>
            <th>Sentiment</th>
          </tr>
        </thead>
        <tbody>";
        // boucle pour afficher les données du tableau
        for ($i = 0; $i < count($phrases); $i++) {
          echo "<tr>";
          echo "<td>".$phrases[$i]."</td>";
          echo "<td>".$sentiments[$i]."</td>";
          echo "</tr>";
        }
          echo "
        </tbody>
        </table>
    </div>";
    ?>
</div>



</body>
</html>
