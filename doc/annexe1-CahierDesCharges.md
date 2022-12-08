## Cahier des Charges

### I/ Introduction

Ce document est le cahier des charges relatif au développement d'un site web
permettant la simulation de calcul, dans différents domaines. Il sera alimenté
régulièrement avec de nouvelles fonctions à développer, jusqu'à atteindre sa version
finale qui correspondra alors à la version complète du site web.
Contexte : Site web permettant la simulation de calcule dans plusieurs domaines
Les documents principaux concernés par ce cahier des charges est d’une part un
premier cahier des charges fourni par le client ainsi qu’un planning des objectifs à
réaliser dans des délais précisés.

### II/ Enoncé

L’objectif du projet est de construire un site web\* permettant d’effectuer à terme,
une simulation de différents calculs concernant au moins 3 domaines différents, et
d’en afficher les résultats. Dans un premier temps, nous allons concevoir le site web
qui accueillera les outils de simulations et les utilisateurs, cela constituera un
premier livrable complet. Le site web sera composé de quatre pages statiques reliées
entre elles. Ces pages seront :


- Une page de présentation qui contiendra un texte explicatif sur les
fonctionnalités disponibles sur le site.

- Une page de connexion qui permettra à un utilisateur\* inscrit de se connecter.

- Une page d’inscription qui permet à n’importe quel utilisateur de s’inscrire sur
le site web et donc de disposer, à l’avenir, de toutes les fonctionnalités
disponibles.

- Une page contenant les outils de simulation.

Ce premier livrable contiendra un recueil des besoins, ce cahier des charges ainsi
que deux propositions de maquettes documentées pour le site web, accompagnées par une
proposition de logo documentée et d'un dossier de conception. Il contiendra aussi 
les codes des 2 maquettes ainsi qu'un dossier de test.

Dans un second temps, puis nous installerons un serveur web Apache avec une base de 
données MySQL porté par un RPi4. Ensuite, nous déploierons les page web réalisées sur
le serveur web.

Ce deuxième livrable contiendra un recueil des besoins, ce cahier des charges, un
dossier de spécification, un dossier de conception, un dossier de test ainsi que
les rapports concernant les installations et le déploiement.

Dans un troisième temps, nous allons développer une des trois simulations. Cette simulation porte sur les statistiques et les probabilités où nous ferons du calcul d'intégrales. Ensuite nous déploierons la simulation sur le site et la testerons en condition réelle. 

Ce troisième livrable contiendra donc un recueil des besoins, ce cahier des charges encore agrandi, un dossier de spécification, un dossier de conception, un dossier de test ainsi que les rapports concernant le déploiement de la simulation.

Dans un quatrième temps, nous allons développer un deuxième module. Ce dernier concernera la cryptographie, et permettra le cryptage ou décryptage de messages. Il sera comme le précédent, testé et déployé sur le site.

Le quatrième livrable contiendra alors un recueil des besoins et un cahier des charges incrémentés, un dossier de conception, un dossier de spécification, un  dossier de test ainsi qu'un nouveau rapport de déploiement du module.

### III/ Pré-requis

Du côté des ressources logicielles, nous utiliserons GitLab afin de partager,
versioner, et visionner l'avancée du projet.
Les connaissances acquises en programmation web (PHP) et développement web
(HTML), seront impératives, les connaissances acquises en première année en python seront indispensables pour développer ces simulations.

### IV/ Priorités

Les objectifs principaux sont donc :
- de créer une maquette de l’application à réaliser. Une fois celle-ci confirmée, il faudra commencer à coder en HTML cette page web.
- de déployer les pages web sur le serveur web porté sur le RPi4.
- créer les simulations, tester si elles fonctionnent

*\*Les éléments marqués par ce symbole sont définies dans le glossaire.*


## Glossaire

Ce document a pour vocation d’apporter des précisions quant aux choix réalisés et à ce qu’ils impliquent. Ce document décrit des termes techniques et a pour but de permettre une meilleure communication.

### Vocabulaire :

**Application :** Programme ou ensemble de logiciels utilisés pour réaliser une ou plusieurs tâches dans un même domaine.

**Utilisateur :** Ici nous appelons “utilisateur”, chaque personne capable d’accéder au site web, c’est-à-dire n’importe quelle personne possédant l’adresse du site.

**Visiteur :** chaque utilisateur non inscrit sur le site est considéré comme étant un visiteur.

### Raisonnements :

Le sujet parle de la mise en place d’une “application web” qui contiendrait une “plateforme”. Or d’après nous le terme application n’est pas adapté aux besoins exprimés contrairement au terme de site web qui semble plus approprié. Par “site web”, nous entendons un ensemble de pages web liées entre elles et permettant d’accéder à divers contenus et fonctionnalités.

Pour ce qui est de la “charte graphique”, pour nous c’est un document ou un paragraphe décrivant nos choix concernant l’esthétique du site web.

