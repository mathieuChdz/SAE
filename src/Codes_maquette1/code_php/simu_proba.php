<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>proba</title>
    <link rel="stylesheet" href="simu_proba.css">
    <script src="graphe.js"></script>
</head>
<body>
<nav class="navBar">
  <img class="logo" src="logo_sans_fond.png">
  <h1>X Simulator</h1>
  <input type="button" value="Retour">
</nav>

<div class="simulation">
  <div class="simu-titre">
    <h1>Simulation 1 : Calcul d'intégrales</h1>
  </div>
  <div class="methodes-graphique">
    <div class="methodes">
      <label for="méthodes">Representation graphique des méthodes :</label>
      <div class="methodes-button">
        <input type="button" onclick="grapheGauche()" value="méthode des rectangles gauches">
        <input type="button" onclick="grapheDroit()" value="méthode des rectangles droit">
        <input type="button" onclick="grapheMedians()" value="méthode des rectangles médians">
        <input type="button" onclick="grapheTrapeze()" value="methode des trapèzes">
        <input type="button" onclick="grapheSimpson()" value="methode de Simpson">
      </div>
    </div>
    <div id="graph" class="graphique">
      <img  src="methode_rec_gauche.png">
    </div>
  </div>
</div>

<div class="Saisie">
  <form action="" method="post">
    <div class="form-structure">
      <div class="methodes-param">
        <label for="methodes_selection">Saisisez la méthodes: </label>
        <select name="méthodes" id="methodes_selection">
          <option value="">--Choississez une méthode--</option>
          <option value="méthode rectangles gauche" >méthode des rectangles gauche</option>
          <option value="méthode rectangles droit">méthode des rectangles droit</option>
          <option value="méthode rectangles médians">méthode des rectangles médians</option>
          <option value="méthode des trapèzes">méthode des trapèzes</option>
          <option value="méthode de Simpson">méthode de Simpson</option>

        </select>
      </div>
      <div class="methodes-param">
        <label for="m">Saisisez la valeur de m : </label>
        <input type="text" id="m">
      </div>
      <div class="methodes-param">
        <label for="σ">Saisisez la valeur de σ : </label>
        <input type="text" id="σ" >
      </div>
      <div class="methodes-param">
        <label for="t">Saisisez la valeur de t : </label>
        <input type="text" id="t">
      </div>

      <input type="submit" value="Lancer">
    </div>
  </form>
</div>


</body>
</html>
