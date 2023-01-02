<?php 
session_start();
$connexion = mysqli_connect("localhost", "root", "01r1173");
$bd=mysqli_select_db($connexion,"Utilisateurs");
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $select = "SELECT * FROM utilisateur_inscrit where id = ?";
    $recupUser = mysqli_prepare($connexion, $select);
    $recupUser = mysqli_stmt_execute(array($getid));
    $row_count = mysqli_num_rows($recupUser);
    if(mysqli_num_rows($recupUser) > 0){

        $delete = "DELETE FROM utilisateur_inscrit where id = ?";
        $supprime_user = mysqli_prepare($connexion,$delete);
        $supprime_user = mysqli_stmt_execute(array($getid));

        header('Location: admin_page.php');

    }
    else{
        echo "Aucun membre n'a été trouvé";
    }

}
else{
    echo "L'identifiant n'a pas été récuperé";
}

?>