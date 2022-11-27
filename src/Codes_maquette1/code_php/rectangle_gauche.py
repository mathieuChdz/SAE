import sys
from math import *
def norm(m,s,x):
    el1=(1/(s*sqrt(2*pi)))
    ex=exp(-1/2*((x-m)/s)**2)
    return (el1*ex)

def rectangleG(n,a,b,m,s):
    somme=0
    for i in range (n):
        somme+=norm(m,s,(a+i*((b-a)/n)))
    return((b-a)/n*somme)


b = int(sys.argv[1])
m = int(sys.argv[2])
s = int(sys.argv[3])

print("méthode des rectangles gauches : ",rectangleG(100000,-1000, b, m, s))

