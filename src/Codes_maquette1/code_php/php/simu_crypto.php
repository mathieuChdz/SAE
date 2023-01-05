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

        <form action="traitement_crypto.php" method="post">
            <h1>Simulation 2 : Cyptographie</h1>
        
            <label>Saisisez une clÃ© et un message : </label>

            <label for="cle">Cle </label>
            <input type="text" name="cle">
            <label for="message">Message</label>
            <input type="text" name="message">
            

            <input type="submit"  value="chiffrer" name="chiffrer">
            <input type="submit"  value="dechiffrer" name="dechiffrer">
            
        </form>
        

        
        
        
        <?php
        if (isset($_GET["res"])){
            echo "<p>".$_GET["res"]."</p>";
        }
        ?>
    </body>
    
    <?php
    include '../html/script_nav_bar.html';
    ?>
<?php
}
?>
</html>