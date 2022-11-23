## Recueil des Besoins

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
Le système doit pouvoir fonctionner sur un RPi4 et doit être fluide, ce qui veut dire que les diverses opérations qui pourront être effectuées dervront s'effectuer dans un temps normal.
4. Opérations, sécurité, documentation
Le RPi4 sur lequel fonctionne le système doit être sécurisé et accessible seulement par les personnes abilitées. Une personne extérieure ne doit pas pourvoir accéder au système ou à certaines données ou fonctionnalités si elle ne remplit pas les bonnes conditions. Les détails concernant la sécurité du système sont recensés dans un document spécifique.
Par ailleurs, le système est complètement documenté, tous les éléments accompagnant le système ou servant à son fonctionnement donnent lieu à une documentation.
5. Utilisation et utilisabilité
Le système est utilisable par n'importe quelle personne ayant un appareil numérique connecté à internet possédant un navigateur web, il faut que cette personne connaissent l'adresse IP du serveur pour pouvoir accéder aux pages web du système. Si un utilisateur accède au site web, il peut effectuer une simulation sur un module de calcul de probabilités, dans le cas où il est connecté ou qu'il vient de s'inscrire sur le site web.
6. Maintenance et portabilité
Le site web fonctionne sur les grandes familles de navigateurs web et le système fonctionne sur une carte RPi4.
7. Questions non résolues ou reportées à plus tard

### VI./ Chapitre 6 – Recours humain, questions juridiques, politiques, organisationnelles.

1. Quel est le recours humain au fonctionnement du système ?
2. Quelles sont les exigences juridiques et politiques ?
3. Quelles sont les conséquences humaines de la réalisation du système ?
4. Quels sont les besoins en formation ?
5. Quelles sont les hypothèses et les dépendances affectant l’environnement humain ?