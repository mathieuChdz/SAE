## Recueil des Besoins


L’objectif général du projet est de créer un site web hébergé sur serveur apache, et relié à une base de données gérée grâce à mySql. L’application permet de réaliser des simulations dans différents domaines. 



Le premier objectif est de créer des pages web qui serviront, à terme, pour le site web. Ces pages doivent pouvoir accueillir ou permettre d'accéder aux outils de simulations qui seront développés.
2 acteurs principaux interviennent. D'une part, on retrouve Mr Hoguin qui représente notre client, c'est-à-dire l'IUT de Vélizy. Son objectif actuel est la conception des pages web qui seront sur le site web. D'autre part, il y a l'équipe de développement constituée de 5 membres dont l'objectif est de répondre aux attentes du client. On précise que cette équipe de développement est en concurrence avec toutes les autres équipes de SAE.
Pour réaliser ces pages web, il faut utiliser les langages de programmation HTML et CSS ainsi que le langage CSS. Le langage HTML servira à mettre en place du texte, divers objets, un titre... aux pages web, en plus d'être utilisé pour la structure des pages. Quant au CSS, il servira à arranger l'esthétique des pages. On précise aussi que le langage Markdown sera utilisé pour l'écriture de la documentation. Par ailleurs, les pages web devront s'afficher correctement sur toutes les familles de navigateurs web.
Le client pourra constater l'apparence et l'état des pages web conçues à l'issue d'un livrable contenant entre autres, 2 propositions de maquettes ainsi que leurs codes sources respectifs.




Le second objectif est d’implémenter le serveur web ainsi que notre base de données mysql. L’objectif est que le serveur web et la base de données soient liés pour effectuer des requêtes pour gérer les données utilisateur. Ces requêtes seront des sélections pour vérifier les connexions et des insertions pour effectuer les inscriptions.
Après avoir sécurisé le RPi4, nous devrons y héberger le serveur web et les différentes pages web.  
Pour ce nouvel objectif, les acteurs restent les mêmes, à savoir Mr Hoguin, représentant du client, ainsi que le même groupe de cinq développeurs, suivant les valeurs suivantes:  disponibilité, efficacité, esprit d’équipe, coopération.
Les pages web devront êtres déployées sur un serveur Apache(ou Nginx) et la base de données développée et gérée grâce à MySQL. Le serveur lui sera porté par un RPi4 préalablement sécurisé, grâce à un système de 
Nous allons réaliser différents fichiers de documentation relatifs à l’application: dossier de test, dossier de conception, rapport de l’installation du serveur.
L’application doit être exécutable sur différentes machines, et système d’exploitation (Linux, Windows)
Lors de son développement, le système suit un versionnage grâce à l’outil gitlab, ce qui facilite d’autant plus sa maintenabilité.

### I./ Chapitre 1 – Objectif et portée

1. Quels sont la portée et les objectifs généraux ?
L’objectif général du projet est de créer un site web hébergé sur serveur apache, et relié à une base de données gérée grâce à mySql. L’application permet de réaliser des simulations dans différents domaines. La portée du système englobe divers personnes et divers éléments techniques.
2. Les intervenants. (Qui est concerné ?)
Divers intervenants sont concernés par le système. Dans un premier temps, ce sont les membres de l'équipe de développement et le client qui sont concernés par le système : ils sont les seuls à pouvoir intéragir avec lors des phases de développement. Une fois le système déployé et mis en service, d'autres intervenants peuvent être affectés par le système : il y a les utilisateurs qui visitent le site web et intéragissent avec celui-ci ainsi que le gestionnaire qui peut accéder au site web pour réaliser des opérations qui lui sont propres.
3. Qu’est-ce qui entre dans cette portée ? Qu’est-ce qui est en dehors ? (Les limites du
système.)
La portée de ce système comprend entre autres les utilisateurs qui visitent le site et certaines de leurs données, notamment des données personnelles pour ceux qui s'incrivent. Elle comprend aussi le gestionnaire du site web et l'ensemble des éléments permettant au système de fonctionner, notamment le serveur et le RPi4.

### II./ Chapitre 2 – Terminologie employée / Glossaire

### III./ Chapitre 3 – Les cas d’utilisation

1. Les acteurs principaux et leurs objectifs généraux.
Les acteurs principaux concernés par les cas d'utilisations sont les visiteurs et les utilisateurs inscrits. Leurs objectifs généraux sont de lancer les simulations présentes sur le site web.
2. Les cas d’utilisation métier (concepts opérationnels).
3. Les cas d’utilisation système.

### IV./ Chapitre 4 – La technologie employée

1. Quelles sont les exigences technologiques pour ce système ?
Ce système doit fonctionner sur un RPi4, un ordinateur mono-carte. Sur ce RPi4 doit être installé un serveur Apache qui permettra de faire fonctionner un serveur web. Ce serveur Apache sera notamment accompagné d'une base de données gérée par le système de gestion de base de données MySQL. Pour assurer le bon fonctionnement du site web, d'autres modules seront installés sur le serveur, un module PHP est déjà prévu. Le serveur mis en place sur le RPi4 devra contenir l'ensemble des pages web constituant le site et permettra aux utilisateurs d'y avoir accès et d'intéragir avec.
2. Avec quels systèmes ce système s’interfacera-t-il et avec quelles exigences ?

### V./ Chapitre 5 – Autres exigences

1. Processus de développement
1.1 Qui sont les participants au projet ?
Les participants au projet sont, d'une part, le client qui est l'IUT de Vélizy représenté par son équipe pédagogique, et, d'autre part l'équipe de développement constituée de 5 membres.
1.2 Quelles valeurs devront être privilégiées ? (exemple : simplicité, disponibilité, rapidité, souplesse etc... )
Les valeurs privilégiées sont les suivantes : disponibilité, efficacité, esprit d’équipe et coopération.
1.3 Quels retours ou quelle visibilité sur le projet les utilisateurs et commanditaires
souhaitent-ils ?
Les commanditaires souhaitent avoir une documentation complète sur le projet. Ils souhaitent notamment que les codes sources soient documentés.
1.4 Que peut-on acheter ? Que doit-on construire ? Qui sont nos concurrents ?
Nos concurrents sont tous les groupes de SAE qui réalisent le même projet pour notre client.
1.5 Quels sont les autres exigences du processus ? (exemple : tests, installation, etc...)
Le processus nécessite l'installation de divers modules sur un RPi4, notamment l'installation d'un serveur Apache fonctionnel avec une base de données. Il est aussi nécessaire de développer des tests pour vérifier le bon fonctionnement des fonctionnalités et du système. 
1.6 À quelle dépendance le projet est-il soumis ?
Aucune dépendance particulière n'a été mise en évidence.

2. Règles métier
3. Performances
4. Opérations, sécurité, documentation
5. Utilisation et utilisabilité
6. Maintenance et portabilité
7. Questions non résolues ou reportées à plus tard

### VI./ Chapitre 6 – Recours humain, questions juridiques, politiques, organisationnelles.

1. Quel est le recours humain au fonctionnement du système ?
2. Quelles sont les exigences juridiques et politiques ?
3. Quelles sont les conséquences humaines de la réalisation du système ?
4. Quels sont les besoins en formation ?
5. Quelles sont les hypothèses et les dépendances affectant l’environnement humain ?