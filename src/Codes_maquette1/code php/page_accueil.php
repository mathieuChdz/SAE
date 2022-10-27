<?php

echo "<header>

<!-- lien vers les simulations-->
<nav>
    <img src='logo_sans_fond.png'>
    <h1>X Simulator</h1>
    <a href='simulation.php'>Simulation 1</a>
    <a href='simulation.php'>Simulation 2</a>
    <a href='simulation.php'>Simulation 3</a>
    <form action='page_connexion.php'>
        <input type='submit' value='Se connecter'>
    </form>
</nav>
</header>
<h4> Exemple de vidéo de démonstration du site : </h4>
<div class='text'>
    <!-- text explicatif -->
    <p>
        <br>
        <br>
        <br>
Text explicatif<br>
        <br>
        <br>
        <br>

    </p>
    <!-- video de démonstration -->
    <iframe width='560' height='315' src='https://www.youtube.com/embed/-Da8Mf5vg7o' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>


</div>";
echo "<style>
header {
    background: linear-gradient(90deg, rgb(65, 180, 220), rgb(199, 252, 240));
}

body {
    margin: 0;
    background-color:  rgba(218,218,214,1);
}

nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    border-bottom: 5px solid rgba(145,144,144,1);
    padding: 10px;
}

nav img{
    width: 150px;
    margin-right: 200px;
}

nav h1{
    margin-right: 100px;
    font-size: 60px;
}

nav a {
    text-decoration: none;
    color: black;
    margin-right: 40px;
    font-size: 30px;
    border-radius: 5px;
}

nav input {
	font-size: 20px;
	margin-left: 100px;
	
}

nav a:hover{
    background: linear-gradient(90deg, rgb(147, 246, 224), rgb(199, 252, 240));
    color: black;
    border-bottom: 3px solid rgb(31, 91, 102);
    padding: 10px;
    transition: 0.3s;
    border-radius: 10px;
}

h4 {
    margin-left: 1050px;
    margin-top: 50px;
    font-size: 25px;
    margin-bottom: 0px;
    text-decoration: underline;
    color: black;
}

.text{
    display: flex;;
    flex-wrap: wrap;
    padding-top: 50px;
    justify-content: center;
}

.text p{
    margin: 10px;
    padding: 100px;
    border: 2px solid black;
}

.text iframe{
    size: auto;
    margin-left: 400px;
    border: 2px solid black;
}

</style>";
