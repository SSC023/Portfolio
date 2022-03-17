import random
HUD = [' ', '0', '0-', '0+', '0+=', '-0+=', '--0+=']
palabras = ['sol', 'tren', 'naio', 'plato', 'pato', 'pilsen', 'techo', 'historia', 'libros', 'ola', 'pucho', 'simba', 'tambo', 'libertad', 'ruper', 'agus', 
           'mujer', 'tipo', 'trepo', 'saber', 'notar', 'labios', 'beso', 'queso', 'jamon', 'actor', 'pensar', 'luego', 'brad', 'alberto', 'roca', 'tony', 'stark', 'calvo',
            'cosa', 'skol', 'amstel', 'walker', 'rick', 'extra']
palabra_random = [palabras[random.randrange(len(palabras))]]
palabra = "".join(palabra_random)
palabra
def acertar(char):
        for i in range(len(palabra)):
            if char != palabra[i]:
                continue
            elif char == palabra[i]:
                return True
            else:
                return False
def posicion(char):
    for i in range(len(palabra)):
        if char != palabra[i]:
            continue
        elif char == palabra[i]:
            posicion = i
            return posicion
        else:
            pass
 def ganar(aux):
    if aux == 0:
        print("Felicidades! Ganaste el juego! La palabra es", palabra)
    else:
        print("Oof. Perdiste el juego. La palabra era", palabra)
 print("Bienvenido al juego de ahorcado")
print("")
print("Reglas del juego: Dar letras en minúscula, adivinar la palabra en menos de 6 intentos. NO poner la misma letra 2 veces.")
print("")
contador = 0
contador1 = len(palabra)
print("La palabra tiene", len(palabra), "letras. ")
while contador < 5 and contador1 > 0:
    intento1 = input("Ingrese una letra: ")
    if acertar(intento1) == True:
        contador1 -= 1
        print("Has acertado una letra. La palabra contiene", intento1, "y se encuentra en la posición", posicion(intento1))
        print(HUD[contador])
    else:
        contador += 1
        print("No has acertado. ")
        print(HUD[contador])
ganar(contador1)
