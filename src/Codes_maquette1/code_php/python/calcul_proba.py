from math import *

def norm(m,s,x):
    """Calcul une probabilité suivant une loi normale, en fonction de la moyenne et l'écart type.
    Entree :
        m (int) -> la moyenne de la loi normale
        s (int) -> l'ecart type 
        x (int) -> une variable aléatoire  qui suit une loi normale
    Sortie :
        Résultat du calcul de loi normale pour les parametres renseignés."""

    #La formule est séparée en deux parties par le produit
    el1=(1/(s*sqrt(2*pi)))    # Le quotient
    ex=exp(-1/2*((x-m)/s)**2) # L'exponentielle
    return (el1*ex)             

def rectangleG(n,a,b,m,s):
    """Calcul une probabilité suivant une loi normale, en fonction de la moyenne et l'écart type, 
       grâce à la méthode des rectangles gauches
    Entree :
        n (int) -> nombre de rectangles générés
        a (int) -> borne inférieure de l'intégrale
        b (int) -> borne supérieur de l'intégrale
        m (int) -> la moyenne de la loi normale
        s (int) -> l'ecart type 
    Sortie :
        Résultat du calcul de probabilité pour les parametres renseignés."""
    somme=0
    for i in range (n):                   # Calcul de la probabilité 
        somme+=norm(m,s,(a+i*((b-a)/n)))  # pour le point en cours
    return((b-a)/n*somme)                  


def rectangleD(n,a,b,m,s):
    """Calcul une probabilité suivant une loi normale, en fonction de la moyenne et l'écart type, 
       grâce à la méthode des rectangles droits
    Entree :
        n (int) -> nombre de rectangles générés
        a (int) -> borne inférieure de l'intégrale
        b (int) -> borne supérieur de l'intégrale
        m (int) -> la moyenne de la loi normale
        s (int) -> l'ecart type 
    Sortie :
        Résultat du calcul de probabilité pour les parametres renseignés."""
    somme=0
    for i in range (1,n+1):              # Calcul de la probabilité
        somme+=norm(m,s,(a+i*((b-a)/n))) # pour le point en cours
    return((b-a)/n*somme)


def rectangleM(n,a,b,m,s):
    """Calcul une probabilité suivant une loi normale, en fonction de la moyenne et l'écart type, 
       grâce à la méthode des rectangles médiants
    Entree :
        n (int) -> nombre de rectangles générés
        a (int) -> borne inférieure de l'intégrale
        b (int) -> borne supérieur de l'intégrale
        m (int) -> la moyenne de la loi normale
        s (int) -> l'ecart type 
    Sortie :
        Résultat du calcul de probabilité pour les parametres renseignés."""
    somme=0
    for i in range (n):                                            # Calcul de la probabilité
        somme+=norm(m,s,(((a+i*((b-a)/n))+(a+(i+1)*((b-a)/n)))/2)) # pour le point en cours
    return((b-a)/n*somme)


def trapeze(n,a,b,m,s):
    """Calcul une probabilité suivant une loi normale, en fonction de la moyenne et l'écart type, 
       grâce à la méthode des trapèzes
    Entree :
        n (int) -> nombre de rectangles générés
        a (int) -> borne inférieure de l'intégrale
        b (int) -> borne supérieur de l'intégrale
        m (int) -> la moyenne de la loi normale
        s (int) -> l'ecart type 
    Sortie :
        Résultat du calcul de probabilité pour les parametres renseignés."""
    somme=0
    # La forule est séaprée en plusieurs parties 
    pre=(b-a)/(2*n) # Le facteur commun
    fa=norm(m,s,a)  # loi de normale du point a     
    fb=norm(m,s,b)  # loi de normale du point b     
    
    for i in range (1,n):               # Calcul de la probabilité
        somme+=norm(m,s,(a+i*((b-a)/n)))# pour le point en cours
    return(pre*(fa+fb+2*somme))


def simpson(n,a,b,m,s):
    """Calcul une probabilité suivant une loi normale, en fonction de la moyenne et l'écart type, 
       grâce à la méthode de Simpson
    Entree :
        n (int) -> nombre de rectangles générés
        a (int) -> borne inférieure de l'intégrale
        b (int) -> borne supérieur de l'intégrale
        m (int) -> la moyenne de la loi normale
        s (int) -> l'ecart type 
    Sortie :
        Résultat du calcul de probabilité pour les parametres renseignés."""

    somme1=0                            # Somme initialisée avec 'un tour' d'avance 
    somme2=norm(m,s,(a+((0*(b-a))/n)))  # pour faire évoluer les deux en même temps 
    pre=(b-a)/(6*n)  # Facteur commun                
    fa=norm(m,s,a)   # loi de normale du point a     
    fb=norm(m,s,b)   # loi de normale du point b    
    
    for i in range (1,n):
        
        somme1+=norm(m,s,(a+((i*(b-a))/n)))           # Calcul de la probabilité
        somme2+=norm(m,s,(a+(((2*i+1)*(b-a))/(2*n)))) # pour le point en cours
        
    return(pre*(fa+fb+2*somme1+4*somme2))