## Conception détaillée

### Maquette 1:

**Page d’accueil:**

La page se constitue d’une balise nav qui permet d’accéder aux simulations. Le nav est constitué d’un logo, d’un titre h1, de liens pour accéder aux simulations, ainsi qu’un submit pour se connecter.

Ensuite, il y a une balise div qui regroupe un paragraphe qui correspond au texte explicatif ainsi qu’une balise iframe pour la vidéo de démonstration.

Un titre h4 est disposé au-dessus de la vidéo pour l’introduire.

**Page de connexion:**

La page possède un formulaire qui permet à une personne de se connecter. Ce formulaire contient:

- Un titre h1 ‘Connexion’
- Un label et un texte pour l’adresse email
- Un label et un texte pour le mot de passe
- Un submitpour se connecter
- Un lien pour le cas où la personne à oublié son mot de passe
- Un lien pour créer un compte

**Page d’erreur:**

La page d’erreur se décompose en plusieurs parties distinguées par des balises div. Il y a:

- Un div qui contient un titre h1 ‘ERROR’.
- Un div qui regroupe les images affichées. Chaque image possède un div.
- Un div qui contient un lien qui permet de retourner sur la page de connexion

**Page d’inscription:**

La page est composée d’un formulaire d'inscription. Ce formulaire contient:

- Un titre h1 ‘Inscription’
- Un label et un texte pour le nom
- Un label et un texte pour le prénom
- Un label et un texte pour l’adresse email
- Un label et un texte pour le mot de passe
- Un submit pour créer un compte

**Page simulation:**

La page simulation comporte un titre h1 “Cette page est en cours de développement”.

### Maquette 2:

**Page d’accueil:**

La page se constitue d’une balise nav qui permet d’accéder aux simulations. Le nav est constitué d’un logo, d’un titre h1 ainsi qu’un bouton pour se connecter.

Ensuite, il y a une balise div qui regroupe un paragraphe qui correspond au texte explicatif ainsi qu’une balise iframe pour la vidéo de démonstration.

Un titre h4 est disposé au-dessus de la vidéo pour l’introduire.

Il y a de plus une partie de type section qui comporte des div. Ces div sont composés de:

- Un titre h2
- Un paragraphe d’explication
- un lien

Il y a 3 div qui correspondent aux 3 simulations.

**Page de choix de connection:**

La page contient un formulaire.

Ce formulaire est composé de:

- Un paragraphe 'Déjà un compte ?’
- Un submit pour se connecter
- Un paragraphe ‘nouvel utilisateur ?’
- Un lien pour accéder à la page d’inscription
- Un lien pour accéder à la page d’accueil en tant que non inscrit

**Page de connexion:**

La page possède un formulaire qui permet à une personne de se connecter. Ce formulaire contient:

- Un titre h1 ‘Connexion’
- Un label et un texte pour l’adresse email
- Un label et un texte pour le mot de passe
- Un submit pour se connecter
- Un lien pour le cas où la personne à oublié son mot de passe
- Un lien pour créer un compte

**Page d’erreur:**

La page d’erreur se décompose en plusieurs parties distinguées par des balises div. Il y a:

- Un div qui contient un titre h1 ‘ERROR’.
- Un div qui regroupe les images affichées. Chaque image possède un div.
- Un div qui contient un lien qui permet de retourner sur la page de connexion

**Page d’inscription:**

La page est composée d’un formulaire d'inscription. Ce formulaire contient:

- Un titre h1 ‘Inscription’
- Un label et un texte pour le nom
- Un label et un texte pour le prénom
- Un label et un texte pour l’adresse email
- Un label et un texte pour le mot de passe
- Un submit pour créer un compte

**Page simulation:**

La page simulation comporte un titre h1 “Cette page est en cours de développement”.

### Serveur et Base de données

Le serveur web utilisé est un serveur web Apache. La page par défaut du renvoyée par Apache, c'est-à-dire la page sur laquelle on arrive lorsqu'on accède au serveur web sur internet, se nomme index.php : c'est la page d'accueil du site.
Ce serveur web est accompagné du système de gestion de base de données (abrégé SGBD) MySQL. Ce SGBD nous a permis de créer et gérer une base de données à l'aide de l'interface phpMyAdmin.
La base de données que nous utilisons ce nomme "Utilisateurs" et contient une table nommée "Utilisateur_inscrit".
Le serveur web Apache, le SGBD MySQL ainsi qu'un module PHP constitues une pile LAMP (Linux Apache MySQL PHP) qui est installée sur le RPi4 fourni par le client et qui fonctionne sous Linux.
