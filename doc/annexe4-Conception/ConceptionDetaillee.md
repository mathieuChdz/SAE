<h2><div align="center">Conception détaillée</div></h2>


**Maquette 1:**

**Page d'accueil:**

La page se constitue d'une balise nav qui permet d'accéder aux simulations. La nav est constitué d'une image img du logo, d'un titre h1, de liens et d'un submit pour se connecter, contenu dans une liste non ordonnée ul pour accéder aux simulations.

Lorsque la page est en fenêtré un menu hamburger apparaît, contenant les liens vers les simulations et le bouton se connecter.

Si un visiteur se connecte, celui-ci devient un utilisateur et le bouton "se connecter" devient un bouton "se déconnecter".

Ensuite, il y a une balise div qui regroupe un paragraphe de balise "p" qui correspond au texte explicatif ainsi qu'une balise "a" pour un lien vers la vidéo de présentation. Ces explications sont visibles quand l'utilisateur passe sa souris dessus.


**Page de connexion:**

La page possède un formulaire qui permet à une personne de se connecter. Ce formulaire contient:

- Un titre h1 'Connexion'
- Une icône email
- un texte pour l'adresse email
- Une icône mot de passe
- un texte pour le mot de passe
- Un lien pour le cas où la personne à oublié son mot de passe qui retourne à la page d'erreur
- Un submit pour se connecter
- Un lien pour créer un compte
- Un lien pour retourner à la page d'accueil

**Page d'erreur:**

La page d'erreur se décompose en plusieurs parties distinguées par des balises div. Il y a:

- Un titre h1 'ERROR'.
- Des images.
- Un lien qui permet de retourner sur la page de connexion

**Page d'inscription:**

La page est composée d'un formulaire d'inscription. Ce formulaire contient:

- Un titre h1 'Inscription'
- Un texte pour le nom
- Une icône pour le nom
- Un texte pour le prénom
- Une icône pour le prénom
- Un texte pour l'adresse email
- Une icône pour l'adresse email
- Un texte pour le mot de passe
- Une icône pour le mot de passe
- Une image pour le captcha
- Un bouton audio pour le captcha
- Un texte pour le captcha
- Un submit pour créer un compte
- Un lien pour retourner à la page de connexion

**Page de profil:**

La page possède la barre de navigation avec le logo le titre et les liens vers les autres simulations, ainsi qu'un bouton pour se déconnecter. Pour retourner à l'accueil l'utilisateur peut cliquer sur le titre.
La page contient deux parties :

La première est un formulaire qui contient :

- Un titre h3 'Changer de mot de passe'
- Un label 'Mot de passe actuel'
- Un champ de saisie pour rentrer le mot de passe actuel
- Un label 'Nouveau mot de passe'
- Un champ de saisie pour rentrer le nouveau mot de passe
- Un label 'Confirmer le mot de passe'
- Un champ de saisie pour resaisir le mot de passe
- Un submit pour enregistrer

La deuxième partie est un historique des mots de passe modifié par l'utilisateur : il y a un titre h2 'Historique des mots de passe', ainsi qu'un tableau avec l'ordre des changements et le mot de passe actuel qui a été précédemment changé.

**Page de l'administrateur (gestionnaire):**

La page possède la barre de navigation avec le logo le titre et les liens vers les autres simulations, ainsi qu'un bouton pour se déconnecter. Pour retourner à l'accueil l'utilisateur peut cliquer sur le titre.

La page contient : 
- Un titre h2 'Quelle table voulez-vous afficher'

Un formulaire avec :
- Un submit 'utilisateurs'
- Un submit 'statistiques'
- Un submit 'error log'

Un second titre h2 qui affiche le titre de la table choisie.

Une barre de recherche créée à l'aide d'un formulaire avec :
- Un label 'mot de recherche'
- Un champ de saisie pour renter la recherche
- Un submit pour rechercher

Le contenu des différentes tables. 

**Page simulation intégrale:**

La page possède la barre de navigation avec le logo le titre et les liens vers les autres simulations, ainsi qu'un bouton pour se déconnecter. Pour retourner à l'accueil l'utilisateur peut cliquer sur le titre. Le contenu de la page est divisé en deux parties : 
La première est une représentation graphique des trois méthodes proposées.
Il y a cinq boutons et une image qui se met à jour en fonction du bouton sélectionné.
La deuxième partie est un formulaire pour lancer la simulation. Ce formulaire contient :

- Une liste déroulante pour choisir la méthode que l'on souhaite utiliser
- un label et un texte pour le paramètre m (l'espérence)
- un label et un texte pour le paramètre σ (l'écart-type)
- un label et un texte pour le paramètre t
- Un submit pour lancer la simulation

Le résultat de la simulation est affiché en bas de la page.

**Module Chiffrement**

Le module est découpé en 2 fichiers qui contiennent 6 fonctions différentes (9 au total), dont 2 fonctions majeures qui sont celles qui servent aux fonctionnalités du module. Ci-dessous les 6 fonctions différentes :

La fonction **ascii** prend en paramètre un message sous forme de chaîne de caractères et renvoie un tableau dont chaque case est le code ascii (chaîne de caractères) de chaque caractère du message. Cette fonction est utilisée par les fonctions perm, codage et decodage.

La fonction **perm** permet de générer une liste de longueur 256 avec les caractères convertis en ascii de la clé entrée en paramètre. Cette fonction est utilisée dans les fonctions coder et décoder. 


La fonction **codage** est une fonction majeure. Elle prend en paramètre une clé et un message sous forme de chaînes de caractères et renvoie un tableau dont chaque case contient un caractère en hexadécimal du message codé, ces caractères hexadécimaux sont sous formes de chaînes de caractères. Cette fonction sert à chiffrer un message avec le chiffrement RC4.

La fonction **decodage** est une fonction majeure. Cette fonction sert à déchiffrer un message qui a été codé avec le chiffrement RC4. Elle prend en paramètre un message qui a été codé à l’aide d’un chiffrement RC4, c’est un tableau dont les cases contiennent les caractères du message qui sont des chaînes de caractères, et la clé qui a été utilisée pour coder le message, sous forme de chaîne de caractères. La fonction renvoie le message décodé sous forme de chaîne de caractères.

La fonction **affiche_message** prend en paramètre un message qui a été chiffré ou déchiffré à l'aide du chiffrement RC4, ce message est sous forme de tableau. La fonction affiche ce message dans son état actuel sous forme de chaîne de caractères.

La fonction **toList**  permet de convertir une chaîne de caractère et retourner une liste, en prenant pour chaque cellule, les éléments de la chaîne de caractères deux par deux. Elle prend en paramètre un message sous forme de chaîne de caractères représentant un code hexadécimal, il peut être le résultat d'un retour de la fonction codage. 

**Serveur et Base de données**

Le serveur web utilisé est un serveur web Apache. La page par défaut du renvoyée par Apache, c'est-à-dire la page sur laquelle on arrive lorsqu'on accède au serveur web sur internet, se nomme index.php : c'est la page d'accueil du site. Ce serveur web est accompagné du système de gestion de base de données (abrégé SGBD) MySQL. Ce SGBD nous a permis de créer et gérer une base de données à l'aide de l'interface

phpMyAdmin. La base de données que nous utilisons ce nomme "Utilisateurs" et contient une table nommée "Utilisateur\_inscrit". Le serveur web Apache, le SGBD MySQL ainsi qu'un module PHP constitues une pile LAMP (Linux Apache MySQL PHP) qui est installée sur le RPi4 fourni par le client et qui fonctionne sous Linux.

---

**Maquette 2:**

**Page d'accueil:**

La page se constitue d'une balise nav qui permet d'accéder aux simulations. Le nav est constitué d'un logo, d'un titre h1 ainsi qu'un bouton pour se connecter.

Ensuite, il y a une balise div qui regroupe un paragraphe qui correspond au texte explicatif ainsi qu'une balise iframe pour la vidéo de démonstration.

Un titre h4 est disposé au-dessus de la vidéo pour l'introduire.

Il y a de plus une partie de type section qui comporte des div. Ces div sont composés de:

- Un titre h2
- Un paragraphe d'explication
- un lien

Il y a 3 div qui correspondent aux 3 simulations. **Page de choix de connection:**

La page contient un formulaire.

Ce formulaire est composé de:

- Un paragraphe 'Déjà un compte ?'
- Un submit pour se connecter
- Un paragraphe 'nouvel utilisateur ?'
- Un lien pour accéder à la page d'inscription
- Un lien pour accéder à la page d'accueil en tant que non inscrit

**Page de connexion:**

La page possède un formulaire qui permet à une personne de se connecter. Ce formulaire contient:

- Un titre h1 'Connexion'
- Un label et un texte pour l'adresse email
- Un label et un texte pour le mot de passe
- Un submit pour se connecter
- Un lien pour le cas où la personne à oublié son mot de passe
- Un lien pour créer un compte

**Page d'erreur:**

La page d'erreur se décompose en plusieurs parties distinguées par des balises div. Il y a:

- Un div qui contient un titre h1 'ERROR'.
- Un div qui regroupe les images affichées. Chaque image possède un div.
- Un div qui contient un lien qui permet de retourner sur la page de connexion

**Page d'inscription:**

La page est composée d'un formulaire d'inscription. Ce formulaire contient:

- Un titre h1 'Inscription'
- Un label et un texte pour le nom
- Un label et un texte pour le prénom
- Un label et un texte pour l'adresse email
- Un label et un texte pour le mot de passe
- Un submit pour créer un compte
