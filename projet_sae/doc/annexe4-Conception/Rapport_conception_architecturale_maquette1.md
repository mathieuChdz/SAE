## Conception architecturale de la première maquette
### I/ Les composants

4 composants seront nécessaires pour la mise en oeuvre de cette maquette. Ces 4 composants sont des fichiers (file) html.
Voici ces composants et ce à quoi ils correspondent :
1. Le composant page_accueil.html contient le code permettant d'afficher la page d'accueil du site.
2. Le composant page_inscription.html contient le code permettant d'afficher la page contenant le formulaire d'inscription au site.
3. Le composant page_connexion.html contient le code permettant d'afficher la page contenant le formulaire de connexion du site.
4. Le composant page_erreur.html contient le code permettant d'afficher la page contenant la page affichant une erreur.

### II/ Les relations

Les différents composants sont reliés entre eux par diverses relations.
+ Les composants page_accueil.html et page_connexion.html sont reliés par une relation d'association, à partir de chacun de ces composants on peut accéder à l'autre.
+ Le composant page_inscription.html est relié au composant page_accueil.html par une relation d'association naviguable de page_inscription.html à page_accueil.html. On peut accéder à page_accueil.html en passant par page_inscription.html.
+ Le composant page_connexion.html est relié au composant page_inscription.html par une relation d'association naviguable de page_connexion.html à page_inscription.html. On peut accéder à page_inscription.html en passant par page_connexion.html.
+ Le composant page_connexion.html est relié au composant page_erreur.html par une relation d'association naviguable de page_connexion.html à page_erreur.html. On peut accéder à page_erreur.html en passant par page_connexion.html.
+ Le composant page_erreur.html est relié au composant page_accueil.html par une relation d'association naviguable de page_erreur.html à page_accueil.html. On peut accéder à page_accueil.html en passant par page_erreur.html.



