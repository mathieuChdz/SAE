import sys
from math import *
def norm(m,s,x):
    el1=(1/(s*sqrt(2*pi)))
    ex=exp(-1/2*((x-m)/s)**2)
    return (el1*ex)

def trapeze(n,a,b,m,s):
    somme=0
    pre=(b-a)/(2*n)
    fa=norm(m,s,a)
    fb=norm(m,s,b)
    
    for i in range (1,n):
        somme+=norm(m,s,(a+i*((b-a)/n)))
    return(pre*(fa+fb+2*somme))

b = int(sys.argv[1])
m = int(sys.argv[2])
s = int(sys.argv[3])

print("méthode de trapeze : ",trapeze(100000,-1000, b, m, s))

