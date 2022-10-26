## Conception architecturale de la deuxième maquette
### I/ Les composants

5 composants seront nécessaires pour la mise en oeuvre de cette maquette. Ces 5 composants sont des fichiers (file) html.
Voici ces composants et ce à quoi ils correspondent :
1. Le composant accueil.html contient le code permettant d'afficher la page d'accueil du site.
2. Le composant formulaire_inscription.html contient le code permettant d'afficher la page contenant le formulaire d'inscription au site.
3. Le composant connexion.html contient le code permettant d'afficher la page contenant le formulaire de connexion du site.
4. Le composant choix_connexion.html contient le code permettant de choisir si on souhaite se connecter ou s'inscrire.
5. Le composant erreur.html contient le code permettant d'afficher la page contenant la page affichant une erreur.

### II/ Les relations

Les différents composants sont reliés entre eux par diverses relations.
+ Les composants page_accueil.html et choix_connexion.html sont reliés par une relation d'association, à partir de chacun de ces composants on peut accéder à l'autre.
+ Le composant choix_connexion.html est relié au composant formulaire_inscription.html par une relation d'association. On peut accéder chacune des pages à partir de l'autre.
+ Le composant choix_connexion.html est relié au composant connexion.html par une relation d'association. On peut accéder à chacune des pages à partir de l'autre.
+ Le composant connexion.html est relié au composant erreur.html par une relation d'association naviguable de connexion.html à erreur.html. On peut accéder à erreur.html en passant par connexion.html.
+ Le composant erreur.html est relié au composant choix_connexion.html par une relation d'association naviguable de erreur.html à choix_connexion.html. On peut accéder à choix_connexion.html en passant par erreur.html.

