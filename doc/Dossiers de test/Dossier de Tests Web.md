## Dossier de Tests Web


### **Introduction:** Ce document à pour objectif de référencer les tests réalisés pour les pages web du site. 
<br>

### **Description de la procédure des tests:** Ces tests sont vérifiés de manière visuelle.  On vérifie notemment que les pages construites correspondent aux maquettes fournies. 
<br>

### **Tests:** Pour ces tests, nous allons déterminer les différentes actions et redirections possible. 

<br>
<br>

**Maquette 2 :**



|N°|action|attendu|résultat|
| - | - | - | - |
|1|Accéder à la page d’accueil|La page d’accueil s’affiche|OK|
|2|Appuyer sur le bouton “register” de la page d’accueil|arriver sur la page de choix de connexion|OK|
|3|choisir de se connecter|arriver sur la page de connexion|OK|
|4|Choisir de se créer un compte|Arriver sur la page du formulaire d’inscription||
|5|appuyer sur le bouton “se connecter” de la page de connexion|retour à la page d’accueil|OK|
|6|appuyer sur le bouton “confirmer” de la page du formulaire d’inscription|Retour à la page d’accueil|OK|
|7|appuyer sur le bouton “mot de passe” oublié de la page de connexion|arrivée sur la page d’erreur|OK|
|8|appuyer sur le bouton “page de connexion” de la page d’erreur|retourner à la page de choix de connexion|OK|
|9|appuyer sur un bouton “lancer” sur la page d’accueil dans les zones des simulations|Renvoie sur une page vide avec un texte indiquant qu’elle est en cours de développement|OK|
|10|appuyer sur le bouton non inscrit|renvoie sur la page d’accueil|OK|

*Tableau 1: données de test de la maquette 2*

**Maquette 1 :**



|N°|action|attendu|résultat|
| - | - | - | - |
|1|Accéder à la page d’accueil|La page d’accueil s’affiche|OK|
|2|appuyer sur le bouton “se connecter” de la page d’accueil|arriver sur la page de connexion|OK|
|3|appuyer sur un bouton “simulation”|Renvoie sur une page vide avec un texte indiquant qu’elle est en cours de développement|OK|
|4|appuyer sur le bouton “créer un compte” de la page de connexion|arriver sur la page du formulaire d’inscription|OK|
|5|appuyer sur le bouton “créer un compte” de la page du formulaire d’inscription|renvoie sur la page d’accueil|OK|
|6|appuyer sur le bouton “mdp oublié” sur la page de connexion|renvoie sur une page d’erreur|OK|
|7|appuyer sur le bouton “se connecter” de la page de connexion|retour à la page d’accueil|OK|
|8|appuyer sur le bouton “retour” de la page d’erreur|renvoie à la page d’accueil|OK|
*Tableau 2: données de test de la maquette 1*


|N°|Action|Attendu|Résultat|
| - | - | - | - |
|1|S’inscrire|Les informations sont inscrites dans la base de données|OK|
|2|Se connecter|Arriver sur la page d’accueil avec une session ouverte|OK|
|3|Se déconnecter|La session est fermée|OK|
*Tableau 3: données de test des actions des pages*

