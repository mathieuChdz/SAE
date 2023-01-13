<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/charte_error_page.css">
</head>


<body>
<?php
session_start();
?>
<!--Le titre de la page-->
<div class="table-error">
  <table>
    <tr>
      <td>
        <div class='display'>
          <h1>ERROR</h1>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <!--Les différentes images de la page: deux images d'un smiley triste et une image d'erreur 404-->
        <div class='image'>
          <div class='image1'>
            <img src='https://static.thenounproject.com/png/1586895-200.png' jsaction='load:XAeZkd;' jsname='HiaYvf' class='n3VNCb KAlRDb' alt='smiley triste &amp; SVG 1586895 - Noun Project' data-noaft='1' style='width: 200px; height: 200px; margin: 37.55px 0px;'>
          </div>
          <div class='imageError'>
            <img src="../images/erreur_404.png" jsname='HiaYvf' class='n3VNCb KAlRDb' alt='Comment corriger ou réparer l'erreur 404 ? - Arobasenet.com' data-noaft='1' style='width: 585px; height: 296.213px; margin: 0px;'>
          </div>
          <div class='image2'>
            <img src='https://static.thenounproject.com/png/1586895-200.png' jsaction='load:XAeZkd;' jsname='HiaYvf' class='n3VNCb KAlRDb' alt='smiley triste - Free PNG &amp; SVG 1586895 - Noun Project' data-noaft='1' style='width: 200px; height: 200px; margin: 37.55px 0px;'>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <!--Le bouton "Retour" qui permet de retourner à la page d'accueil-->
        <div class='button'>
          <a href='../index.php'><input  type='submit' name='page_connexion' id='page_connexion' value='Retour'></a>
        </div>
      </td>
    </tr>
  </table>
</div>

</body>
</html>



