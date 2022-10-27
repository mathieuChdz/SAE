<?php


echo "<form action='page_accueil.php'method='post'>
        <fieldset>
            <h1>Connexion</h1>
            <label for='email'>email :</label>
            <input type='text' id='email' name='email' value=''><br>
            <label for='mdp'>Mot de passe :</label>
            <input type='password' id='mdp' name='mdp' value=''><br><br>
            <input type='submit'value='Se connecter'><br><br>
            <a href='error_page.php'>mot de passe oublié</a><br><br>
            <a href='page_inscription.php'>Créer un compte</a><br><br>
        </fieldset>
</form>";

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