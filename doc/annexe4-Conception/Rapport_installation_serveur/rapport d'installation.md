Nous avons mis en place une pile LAMP (Linux, Apache, Mysql, PHP) Pour Apache2:

Nous avons installé Apache, le serveur utilisé:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.001.png)

Ensuite nous avons créé un dossier qui contiendra les fichiers php. Nous devons donc installer le module php:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.002.png)

Pour Mysql;

Nous installons dans un premier temps mySQL, le système de base de donnée:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.003.png)

Afin de sécuriser la base de donnée nous définissons un mot de passe administrateur:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.004.png)

Nous avons décidé d’utiliser l’interface phpMyAdmin afin de gérer notre base de données plus aisément:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.005.png)

Nous choisissons d'exécuter phpMyAdmin sur notre serveur Apache. Pour cela nous devons finaliser la configuration du serveur:

Nous modifions alors le fichier de config, pour y intégrer phpMyAdmin:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.006.png)

Le serveur doit ensuite être redémarré:

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.007.png)

Afin de nous connecter, nous devons au préalable créer un utilisateur possédant les droits administrateur pour phpMyAdmin

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.008.png)

Nous pouvons ensuite accéder à cette interface via l’adresse suivante:

**http://192.168.1.162/phpmyadmin/**

![](Aspose.Words.6d2761f0-cafa-479c-ae81-54f63de4471e.009.jpeg)
