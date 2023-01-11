import sys
def codage(key: str, message: str) -> list:
    """Chiffre un message a l'aide d'une clef en utilisant le principe du chiffrement RC4.
    Entrees :
        key (str) -> une clef sous forme de chaine de caracteres, cela peut etre un mot ou une phrase.
        message (str) -> un mot ou une phrase sous forme de chaine de caracteres qu'on souhaite chiffrer.
    Sortie :
        code (list) -> un tableau contenant les caracteres (des chaines de caracteres) du message chiffre en hexadecimal."""
    
    i = 0
    j = 0
    S = perm(key)
    code = [None] * len(message)
    key = ascii(key)
    message = ascii(message)
    
    
    for n in range(len(message)):

        i = (i+1) % 256
        j = (j + S[i]) % 256

        S[i], S[j] = S[j], S[i]

        elt=f'{S[(S[i] + S[j]) % 256 ] ^(message[n]):x}'
        if len(elt)<2:
            elt='0'+elt

        code[n] = elt
    
    return code


def ascii(message: str) -> list:
    """Transforme une chaine de caracteres en un tableau contenant les codes ascii correspondant a chauqe caractere.
    Entree :
        message (str) -> un mot ou une phrase sous forme de chaine de caracteres.
    Sortie :
        tab (list) -> un tableau contenant les codes ascii de chaque caractere du message entre en parametre."""
    
    tab = []
    #On parcourt le message caractere par caractere et 
    #on stocke dans un tableau le code ascii correspondant au caractere qu'on regarde
    for i in message:
        tab.append(ord(i))
    return tab





def perm(key: str) -> list:
    """Genere une chaine sous forme de tableau a partir d'une permutation d'une clef entree en parametre.
    Entree :
        key (str) ->  une clef sous forme de chaine de caracteres, cela peut etre un mot ou une phrase.
    Sortie :
        S (list) -> un tableau compose de codes ascii (des entiers) issus d'une permutation de la clef."""
    
    S = list(range(256))
    key = ascii(key)
    
    j = 0
    for i in range(256):
       
        j = (j + S[i] + key[i % len(key)]) % 256
        S[i], S[j] = S[j], S[i]
        
    return S

def affiche_message(message : list):
    """Affiche un message chiffre ou dechiffre avec le chiffrement RC4.
    Entree :
        message (list) -> le message chiffre ou dechiffre avec le chiffrement RC4, c'est un tableau contenant 
            les caracteres du message sous forme de chaines de caracteres.
    Sortie :
        L'affichage du message entre en parametre."""
    
    message_code = str()
    for i in range(len(message)):
        message_code += message[i]
    return message_code




size=int(sys.argv[1])

message=""
for i in range(2,size+1):
    message+=sys.argv[i]
    if i<size:
        message+=" "

key=""
for i in range(size+1,len(sys.argv)):
    key+=sys.argv[i]
    if i<size:
        key+=" "
        
print(affiche_message(codage(key,message)))








