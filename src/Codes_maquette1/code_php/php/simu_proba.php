<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>proba</title>
    <link rel="stylesheet" href="../css/simu_proba.css">
<!--    <link rel="stylesheet" href="../html/popup.css">-->
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

<div class="buttons-form-res">

    <div class="simu-titre">
        <h1>Calcul d'intégrales</h1>
    </div>

    <div class="form-res">
        <!-- formulaire de saisie  -->
        <div class="saisie">
            <fieldset>
                <form action="traitement_proba.php" method="post">
                    <div class="form-structure">
                        <div  class="methodes-param_1">
                            <label for="methodes_selection"></label>
                            <select name="methodes" id="methodes_selection" required="required">
                                <option value="">--Choississez une méthode--</option>
                                <option value="mrm">méthode des rectangles médians</option>
                                <option value="mdt">méthode des trapèzes</option>
                                <option value="mds">méthode de Simpson</option>
                            </select>
                        </div>

                        <div class="methodes-param_2">
                            <h3>Saisissez les valeurs suivantes :</h3>
                            <div class="methodes-param_2_1">
                                <label for="m"></label>
                                <input type="text" id="m" name="m" placeholder="valeur de m" required="required">
                            </div>

                            <div class="methodes-param_2_2">
                                <label for="e_t"></label>
                                <input type="text" id="e_t" name="e_t" placeholder="valeur de σ" required="required">
                            </div>

                            <div class="methodes-param_2_3">
                                <label for="t"></label>
                                <input type="text" id="t" name="t" placeholder="valeur de t" required="required">
                            </div>

                        </div>

                        <div class="methodes-submit">
                            <input type="submit" id="ok" name="ok" value="Lancer">
                        </div>

                    </div>

                </form>
            </fieldset>
            <!-- résultat du formulaire  -->
            <div class="resultat">
                <h2>Résultat :</h2>
                <?php
                if (isset($_GET["res"])){
                    echo "<p>".$_GET["res"]."</p>";
                }
                ?>
            </div>
        </div>
    </div>
    
    <div class="simu-titre">
        <h1>Représentation graphique</h1>
    </div>
    
    <button class="boutons-popup"> Méthode des rectangles gauches <img class="image-popup" src="../images/methode_rec_gauche.png" alt="Méthode des rectangles gauches" hidden></button>
    <button class="boutons-popup"> Méthode des rectangles droites <img class="image-popup" src="../images/methode_rec_droit2.png" alt="Méthode des rectangles droits" hidden></button>
    <button class="boutons-popup"> Méthode des rectangles gauches <img class="image-popup" src="../images/methode_rec_medians2.png" alt="Méthode des rectangles médians" hidden></button>
    <button class="boutons-popup"> Méthode des trapèzes <img class="image-popup" src="../images/methode_trapeze2.png" alt="Méthode des trapèzes" hidden></button>
    <button class="boutons-popup"> Méthode de Simpson <img class="image-popup" src="../images/methode_simpson2.png" alt="Méthode de Simpson" hidden></button>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
</div>




<script>
    var modal = document.getElementById("myModal");

    var img = document.getElementsByClassName("boutons-popup");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    for (var i=0; i < img.length; i++) {
        img[i].onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.getElementsByTagName("img")[0].src;
            captionText.innerHTML = this.getElementsByTagName("img")[0].alt;
        }
    }


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

</body>

<?php
include '../html/script_nav_bar.html';
?>

</html>

