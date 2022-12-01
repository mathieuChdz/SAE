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



|N°|Action|Attendu|Résultat|
| - | - | - | - |
|1|S’inscrire|Les informations sont inscrites dans la base de données|OK|
|2|Se connecter|Arriver sur la page d’accueil avec une session ouverte|OK|
|3|Se déconnecter|La session est fermée|OK|


**Dossier de test**

|classe|m|σ|t|résultat attendu|résultat obtenu|
 | - | - | - | - | - | - |
|p1|90|3|87|0.1586|0.1586|
|p2|-90|3|-87|0.8413|0.8413|
|p3|90|3|-87|0|0|
|p4|-90|3|87|1|0.9999|
|p5|0|3|87|1|0.9999|
|p6|90|0|87|impossible|impossible|
|p7|0|3|0|0.5|0.5|
|p8|0|0|0|impossible|impossible|
|p9|90|-3|87|impossible|impossible