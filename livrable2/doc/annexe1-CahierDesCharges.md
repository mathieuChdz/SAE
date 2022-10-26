**Cahier des Charges**

**I/ Introduction**

Ce document est le cahier des charges relatif au développement d'un site web permettant la simulation de calcul, dans différents domaines. Il sera alimenté régulièrement avec de nouvelles fonctions à développer, jusqu'à atteindre sa version finale qui correspondra alors à la version complète du site web.

Contexte : Site web permettant la simulation de calcul dans plusieurs domaines.

Les documents principaux concernés par ce cahier des charges est d’une part un deuxième cahier des charges fourni par le client ainsi qu’un planning des objectifs à réaliser dans des délais précisés.

**II/ Enoncé**

L’objectif du projet est de construire un site web permettant d’effectuer à terme, une simulation de différents calculs concernant au moins 3 domaines différents, et d’en afficher les résultats.

Dans un premier temps, nous avons une maquette du site web composé de quatre pages statiques reliées entre elles. Ces pages seront :

- Une page de présentation qui contiendra un texte explicatif sur les fonctionnalités disponibles sur le site.
- Une page de connexion qui permettra à un utilisateur\* inscrit de se connecter.
- Une page d’inscription qui permet à n’importe quel utilisateur de s’inscrire sur le site web et donc de disposer, à l’avenir, de toutes les fonctionnalités disponibles.
- Une page contenant les outils de simulation.

La maquette est accompagnée d’une documentation décrivant la finalité du logo ainsi que la charte graphique associée. Cette documentation est un document markdown qui est exporté en pdf.

Dans un second temps, nous sécurisons le RPi4, puis on installe un serveur web Apache avec une base de données MySQL porté par un RPi4. Pour ensuite, déployer les page web réalisées sur le serveur web.

**III/ Pré-requis**

Du côté des ressources logicielles,  nous utiliserons GitLab afin de partager, versioner, et visionner l'avancée du projet.

Les connaissances acquises en programmation web (PHP),  développement web (HTML) et en base de données (SQL) seront impératives.

**IV/ Priorités**

L’objectif principal est donc de déployer les pages web sur le serveur web porté sur le RPi4.
