
									Cas d'utilisation maquette 2

Cas d’utilisation 1 : se connecter


```
Nom: se connecter
Contexte d'utilisation:Un visiteur veut accéder aux simulations. Pour cela il doit se connecter.
Portée:site web
Niveau: utilisateur
Acteur principal: l'utilisateur
Intervenants et intérêts: les intervenants sont l'utilisateur et son intérêt est de pouvoir se connecter
Précondition: l'utilisateur est sur la page de choix de connexion
Garantie minimale: l'utilisateur est renvoyé sur la page de connexion
Garantie en cas de succès: L'utilisateur est connecté.
Déclencheur: l'utilisateur clique sur le bouton "se connecter"
Scénario nominal:
	1. l'utilisateur clique sur le bouton "se connecter"
	2. l'utilisateur remplit le formulaire de connection
Extension:
	l'utilisateur doit créer son compte
		a- l'utilisateur clique sur le bouton "créer un compte"
		b- l'utilisateur remplit le formulaire d'inscription

	l'utilisateur ne souhaite pas se connecter et souhaite rester en tant que non inscrit
		a-  l'utilisateur clique sur le bouton "non inscrit"

	L'utilisateur remplit mal de formulaire de connection
		a-  l'utilisateur clique sur le bouton "se connecter"
		b- l'utilisateur remplit formulaire de connection
		c- l'utilisateur est renvoyé sur le formulaire de connection

	L'utilisateur oublie son mot de passe
		a-  l'utilisateur clique sur le bouton "se connecter"
		b-  l'utilisateur clique sur mot de passe oublié
		c- l'utilisateur est renvoyé sur un page en construction

	L'utilisateur créer un compte avec des identifiant déjà utilisés
		a- l'utilisateur clique sur le bouton "créer un compte"
		b- l'utilisateur remplit le formulaire d'inscription
		c- l'utilisateur est renvoyé sur le formulaire de connection
Liste des variantes:

Informations connexes:
```


Cas d’utilisation 2 : lancer une simulation


```
Nom: lancer une simulation
Contexte d'utilisation:Un visiteur veut lancer une simulation.
Portée:site web
Niveau: utilisateur
Acteur principal: l'utilisateur
Intervenants et intérêts: les intervenants sont l'utilisateur et son intérêt est de pouvoir lancer une simulation.
Précondition: l'utilisateur est connecté
Garantie minimale: l'utilisateur à accès à une présentation de la simulation
Garantie en cas de succès: L'utilisateur lance la simulation voulue.
Déclencheur: l'utilisateur clique sur le bouton "lancer"
Scénario nominal:
	1. L'utilisateur se dirige vers la page d'accueil
	2. l'utilisateur  clique sur le bouton "lancer" de la simulation voulue
Extension:
	l'utilisateur n'est pas connecté
		a- l'utilisateur clique sur le bouton "lancer"
		b- l'utilisateur est redirigé vers la page de choix de connexion
		c- l'utilisateur clique sur le bouton 'se connecter'
		d- l'utilisateur remplit le formulaire de connexion
		e- l'utilisateur est redirigé vers la page d'accueil
		f- l'utilisateur clique sur le bouton "lancer"

	l'utilisateur n'a pas de compte
		a- l'utilisateur clique sur le bouton "lancer"
		b- l'utilisateur est redirigé vers la page de choix de connexion
		c- l'utilisateur clique sur le bouton 'créer un compte'
		d-  l'utilisateur remplit le formulaire d'inscription
		e- l'utilisateur est redirigé vers la page d'accueil
		f- l'utilisateur clique sur le bouton "lancer"

Liste des variantes:

Informations connexes:
```

