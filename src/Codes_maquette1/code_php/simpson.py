import sys
from math import *
def norm(m,s,x):
    el1=(1/(s*sqrt(2*pi)))
    ex=exp(-1/2*((x-m)/s)**2)
    return (el1*ex)

def simpson(n,a,b,m,s):
    somme1=0
    somme2=norm(m,s,(a+((0*(b-a))/n)))
    pre=(b-a)/(6*n)
    fa=norm(m,s,a)
    fb=norm(m,s,b)
    
    for i in range (1,n):
        
        somme1+=norm(m,s,(a+((i*(b-a))/n)))
        somme2+=norm(m,s,(a+(((2*i+1)*(b-a))/(2*n))))     
        
    return(pre*(fa+fb+2*somme1+4*somme2))

b = int(sys.argv[1])
m = int(sys.argv[2])
s = int(sys.argv[3])

print("méthode de simpson : ",simpson(100000,-1000, b, m, s))

