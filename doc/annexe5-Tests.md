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

***Tableau 1: données de test de la maquette 2***

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
***Tableau 2: données de test de la maquette 1***


|N°|Action|Attendu|Résultat|
| - | - | - | - |
|1|S’inscrire|Les informations sont inscrites dans la base de données|OK|
|2|Se connecter|Arriver sur la page d’accueil avec une session ouverte|OK|
|3|Se déconnecter|La session est fermée|OK|
***Tableau 3: données de test des actions des pages***

**Dossier de test proba**

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
***Tableau 4: données de test du module de proba***



**Dossier de test crypto**

|classe|clé|message|action|résultat attendu|résultat obtenu|
 | - | - | - | - | - | - |
|p1|Key|Plaintext|chiffrer|bbf316e8d940af0ad3|bbf316e8d940af0ad3|
|p2|Key|bbf316e8d940af0ad3|dechiffrer|Plaintext|Plaintext|
|p3|Secret|Attack at dawn|chiffrer|45a01f645fc35b383552544b9bf5|45a01f645fc35b383552544b9bf5|
|p4|Secret|45a01f645fc35b383552544b9bf5|dechiffrer|Attack at dawn|Attack at dawn|
|p5|Wiki|pedia|chiffrer|1021bf0420|1021bf0420|
|p6|Wiki|1021bf0420|dechiffrer|pedia|pedia|
|p7|Key|The Message|chiffrer|bff712a1fa51b901c67e2f|bff712a1fa51b901c67e2f|
|p8|Key|bff712a1fa51b901c67e2f|dechiffrer|The Message|The Message|
|p9|The Key|Message|chiffrer|8f2d6a11c68709|8f2d6a11c68709|
|p10|The Key|8f2d6a11c68709|dechiffrer|Message|Message|
|p11|The Key|The Message3|chiffrer|96207c42ea851f40b84e57ef|96207c42ea851f40b84e57ef|
|p12|The Key|96207c42ea851f40b84e57ef|dechiffrer|The Message3|The Message3|
***Tableau 5: données de test du module de crypto***