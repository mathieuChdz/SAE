# Rapport module probabilité

Ce module à pour objectif de calculer une probabilité suivant une **loi normale**. L’utilisateur pourra en choisir les paramètres ***m***(espérance) et ***s***(écart type). De plus, il sélectionne la probabilité à calculer à savoir **P(X$\le$x)**. Pour cela, différentes fonctions sont développées:


# Fonctions

- **loi_normale (*m,s,x*):** calcul une loi de probabilité avec des paramètres (m,s,x) donnés
- **rectangle_droit (*n,a,b,m,s*):**  calcul une probabilité suivant une loi normale grâce à la méthode des rectangles droits
- **rectangle gauche (*n,a,b,m,s*):** calcul une probabilité suivant une loi normale grâce à la méthode des rectangles gauche
- **rectangle médian (*n,a,b,m,s*):** calcul une probabilité suivant une loi normale grâce à la méthode des rectangles médian
- **trapèze (*n,a,b,m,s*):** calcul une probabilité suivant une loi normale grâce à la méthode des trapèzes
- **simpson (*n,a,b,m,s*):** calcul une probabilité suivant une loi normale grâce à la méthode de Simpson

> *n:nombre rectangle/m:espérence/s:écart type/x:valeur cherchée/a:borne inférieure/b:borne supérieur*
	


### Loi normale

$\frac{1}{\sigma\sqrt{2\pi}}\mathrm{e}^{\frac{(x-\mu)^2}{2\sigma^2}}$

`` def norm(m,s,x):``

    ``quotient=(1/(s\*sqrt(2*pi)))``
	
	``ex=exp(-1/2\*((x-m)/s)**2)``
	
``return (quotient*ex)``

La formule est séparée en deux afin de la rendre plus lisible: le quotient d’un côté, l’exponentielle de l’autre.


### Rectangles droits

$\frac{b-a}{n}\sum_{i=0}^{i=n-1} f(ai)$

``def rectangleG(n,a,b,m,s):``

``somme=0``

``for i in range (n):``

``somme+=norm(m,s,(a+i*((b-a)/n)))``

``return((b-a)/n*somme)``

La fonction représente une **somme** de l’**aire** des rectangles conçues. Elle peut être résumée en une **factorisation**: La largeur est le facteur commun [$a-bn$]. La longueur est le résultat de **$loi\_normale(ai)$** avec **a** intervalle inférieur et **i** le rang du rectangle soit [$ai =a +\frac{b-a}{n}i$] (**a** intervalle inférieur; $\frac{b-a}{n}$largeur d’un rectangle; **i** rang du rectangle)

La **somme** est construite grâce à une boucle sur le nombre de rectangle, elle est incrémentée avec les valeurs de $loi\_normale(ai)$

Ce résultat est finalement multiplié par le **facteur commun** précédemment calculé



### Trapèzes

$\frac{b-a}{n} ( f(a)+f(b)+2\sum_{i=0}^{i=n-1} f(ai))$

``def trapeze(n,a,b,m,s):``

``somme=0``

``pre=(b-a)/(2*n)``

``fa=loi_normale(m,s,a)``

``fb=loi_normale(m,s,b)``

``for i in range (1,n):``

``somme+=loi_normale(m,s,(a+i*((b-a)/n)))``

``return(pre*(fa+fb+2*somme))``

La fonction utilise le même principe que la fonction rectangle. Ce qui change est que la fonction trapèze trace un **segment** entre $f(An)$ et $f(An+1)$ et le prend en compte pour calculer l’air des trapèzes conçus. La hauteur est le facteur commun $[\frac{a-b}{2n}]$.


### Simpson

$\frac{b-a}{6n} ( f(a)+f(b)+2\sum_{i=1}^{i=n-1} f(a+ \frac{(i)(b-a)}{n})+4\sum_{i=0}^{i=n-1}f(a+\frac{(2i+1)(b-a)}{2n})$


``def simpson(n,a,b,m,s):``

``somme1=0``

``somme2=loi_normale(m,s,(a+((0*(b-a))/n)))``

``facteurC=(b-a)/(6*n)``

``fa=loi_normale(m,s,a)``

``fb=loi_normale(m,s,b)``

``for i in range (1,n):``

``somme1+=loi_normale(m,s,(a+((i*(b-a))/n)))``

``somme2+=loi_normale(m,s,(a+(((2*i+1)*(b-a))/(2*n))))``

``return(pre*(fa+fb+2*somme1+4*somme2))``

Nous avons ici ‘traduit’ la formule de la méthode de Simpson.
Nous avons initialiser deux sommes:
l’une à 0,
l’autre à $loi\_normale(m,s,(a+((0*(b-a))/n)))$
Car la première somme commence à [$i=1$], l’autre à [$i=0$], cela permet une unique **boucle**
Nous créons par la suite les **variables** de la fonction qui n'évoluent pas dans la boucle. Cette dernière agit alors comme les autres, en appliquant $loi\_normale(ai)$ avec:

[$ai=a+\frac{b-a}{n}i$] à la première somme et,

[$ai=a+\frac{(2i+1)(b-a)}{2n}$] à la deuxième somme

## Quelques exemples
**Pour $P(X<17)$  avec $\mu=20$ et  $\sigma=3$**



|      Méthode     |Résultat|        
| :--------------- |:------:|
| Rectangle Gauche | 0.15643|     
| Rectangle Droit  | 0.15906|          
| Rectangle Médian | 0.15865|  

      

*Ces trois méthodes sont similaires, mais on remarque que que la troisième (qui effectue une **moyenne**) , est davantage précise que les deux autres, l'une est au **dessus** de la courbe, l'autre est en **dessous***

|      Méthode     |Résultat|        
| :--------------- |:------:|
| Trapèzes | 0.15865|     
| Simpson  | 0.15865|          

*Les deux méthodes suivantes utilisent un autre procédé plus complexe, ce qui rend le résultat encore plus proche de la valeur réelle.*
