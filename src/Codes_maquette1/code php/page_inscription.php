<?php

echo "<form action='' method='post'>
    <fieldset>
        <h1>Inscription</h1>
        <label for='nom'>Nom :</label>
        <input type='text' id='nom' name='nom' value=''><br>
        <label for='prenom'>Prenom :</label>
        <input type='text' id='prenom' name='prenom' value=''><br>
        <label for='email'>email :</label>
        <input type='text' id='email' name='email' value=''><br>
        <label for='mdp'>Mot de passe :</label>
        <input type='password' id='mdp' name='mdp' value=''><br><br>
        <input type='submit' value='Créer un compte'>
    </fieldset>
</form>";

if (isset($_POST["Créer un compte"])){
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'])){
        foreach ($_POST as $k => $v){
            $$k=$v;
        }

        $connexion=mysqli_connect("localhost","root","01r1173");
        $bd=mysqli_select_db($connexion,"Utilisateurs");
        $ins="INSERT into Utilisateur_inscrit(login,password,nom,prenom) values(?,?,?,?)";
        $insp=mysqli_prepare($connexion,$ins);
        $mdp_md5 = md5($mdp);
        mysqli_stmt_bind_param($insp,'ssss',$email,$mdp_md5,$nom,$prenom);
        mysqli_stmt_execute($insp);
        mysqli_close($connexion);
        header("Location: index.php");
    }
    else {
        echo "Veuillez remplir tous les champs !";
    }
}


echo "<style>
   html{
    background: linear-gradient(90deg, rgb(65, 180, 220), rgb(199, 252, 240));
}
form {
    height: 900px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
    padding: 10px;
    text-align: center;
    border-radius: 10%;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: rgba(145,144,144,1);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 25px;
}
input[type=submit]:hover{
    background: linear-gradient(90deg, rgb(147, 246, 224), rgb(199, 252, 240));
    color: black;
}

form a {
    color: blue;
}
form a:visited{
    color: purple;
}
form a:hover{
    color: lightskyblue;
}
fieldset{
    border-color: rgba(145,144,144,1);
    border-radius: 30px;
    background-color: rgba(218,218,214,1);
    font-family: 'Microsoft Sans Serif';
    box-shadow: 10px 5px 5px lightskyblue;
}

</style>";
