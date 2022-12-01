## Rapport d'installation



Nous avons mis en place une pile **LAMP** (Linux, Apache, Mysql, PHP)

### Pour Apache2:
Nous avons installé **Apache**, le serveur utilisé:
**``apt-get install apache2``**

Ensuite nous avons créé un dossier qui contiendra les fichiers **php**.
Nous devons donc installer le **module** php:
**``apt-get install php``**

### Pour Mysql:
Nous installons dans un premier temps **mySQL**, le système de base de donnée:
**``sudo apt-get install mysql-server``**

Afin de sécuriser la base de donnée nous définissons un mot de passe
**administrateur**:
**``mysql secure installation``**

Nous avons décidé d’utiliser l’interface **phpMyAdmin** afin de gérer notre base de
données plus aisément:
**``sudo apt-get install phpmyadmin``**

Nous choisissons d'exécuter phpMyAdmin sur notre serveur Apache.
Pour cela nous devons finaliser la configuration du serveur:

Nous modifions alors le fichier de **config**, pour y intégrer phpMyAdmin:
**``# Include phpMyAdmin``**

**``Include /etc/phpmyadmin/apache.conf``**

Le serveur doit ensuite être redémarré:
**``sudo sevice apache2 restart``**

Afin de nous connecter, nous devons au préalable créer un **utilisateur** possédant les
droits administrateur pour phpMyAdmin
**``mysql -u root -p``**

Nous pouvons ensuite accéder à cette **interface** via l’adresse suivante:

**http://192.168.1.162/phpmyadmin/**
