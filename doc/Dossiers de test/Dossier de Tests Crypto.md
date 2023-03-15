## Dossier de Tests Crypto


### **Introduction:** Ce document à pour objectif de référencer les tests réalisés pour le module de cryptographie de notre application. 
<br>

### **Description de la procédure des tests:** Pour ce module, trois paramètres sont pris en compte;message,clé,action. Il n’y a pas de valeur interdite ou de vérification préalable dans l’algorithme. Les résultats de test sont connus, nous effectuons des tests unitaires de type boîte noire. 
<br>

### **Tests:** Pour ces tests, nous allons déterminer les partitions d’équivalences suivantes pour la clé et le message qui peuvent être construits de deux manières:

> partition 1 = texte sans espace et partition 2 = texte avec espace

Pour les tests d'intégrations, nous réaliserons les tests unitaires précédents avec un nouveau paramètre qu’est le chemin d’accès: il sera **relatif**, **absolu** ou **invalide**. 

|Classe|clé|message|action|résultat attendu|résultat obtenu|
| - | - | - | - | - | - |
|p1|Key|Plaintext|chiffrer|bbf316e8d940af0ad3|bbf316e8d940af0ad3|
|p2|Key|bbf316e8d940af0ad3|déchiffrer|Plaintext|Plaintext|
|p3|Secret|Attack at dawn|chiffrer|45a01f645fc35b383552544b9bf5|45a01f645fc35b383552544b9bf5|
|p4|Secret|45a01f645fc35b383552544b9bf5|déchiffrer|Attack at dawn|Attack at dawn|
|p5|he Key|Message|chiffrer|8f2d6a11c68709|8f2d6a11c68709|
|p6|The Key|8f2d6a11c68709|déchiffrer|Message|Message|
|p7|The Key|The Message3|chiffrer|96207c42ea851f40b84e57ef|96207c42ea851f40b84e57ef|
|p8|The Key|96207c42ea851f40b84e57efv|déchiffrer|The Message3|The Message3|
*Tableau de Tests unitaires*


|Classe|path|clé|message|action|résultat attendu|résultat obtenu|
| - | - | - | - | - | - | - |
|p1|absolu|Key|Plaintext|chiffrer|bbf316e8d940af0ad3|bbf316e8d940af0ad3|
|p2|relatif|Key|Plaintext|chiffrer|bbf316e8d940af0ad3|bbf316e8d940af0ad3|
|p3|erroné|Key|Plaintext|chiffrer|erreur|erreur|
|p4|absolu|Key|bbf316e8d940af0ad3|déchiffrer|Plaintext|Plaintext|
|p5|relatif|Key|bbf316e8d940af0ad3|déchiffrer|Plaintext|Plaintext|
|p6|erroné|Key|bbf316e8d940af0ad3|déchiffrer|erreur|erreur|
*Tableau de Tests intégration*



