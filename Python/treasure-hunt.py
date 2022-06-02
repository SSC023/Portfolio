print('''
*******************************************************************************
          |                   |                  |                     |
 _________|________________.=""_;=.______________|_____________________|_______
|                   |  ,-"_,=""     `"=.|                  |
|___________________|__"=._o`"-._        `"=.______________|___________________
          |                `"=._o`"=._      _`"=._                     |
 _________|_____________________:=._o "=._."_.-="'"=.__________________|_______
|                   |    __.--" , ; `"=._o." ,-"""-._ ".   |
|___________________|_._"  ,. .` ` `` ,  `"-._"-._   ". '__|___________________
          |           |o`"=._` , "` `; .". ,  "-._"-._; ;              |
 _________|___________| ;`-.o`"=._; ." ` '`."\` . "-._ /_______________|_______
|                   | |o;    `"-.o`"=._``  '` " ,__.--o;   |
|___________________|_| ;     (#) `-.o `"=.`_.--"_o.-; ;___|___________________
____/______/______/___|o;._    "      `".o|o_.--"    ;o;____/______/______/____
/______/______/______/_"=._o--._        ; | ;        ; ;/______/______/______/_
____/______/______/______/__"=._o--._   ;o|o;     _._;o;____/______/______/____
/______/______/______/______/____"=._o._; | ;_.--"o.--"_/______/______/______/_
____/______/______/______/______/_____"=.o|o_.--""___/______/______/______/____
/______/______/______/______/______/______/______/______/______/______/_____ /
*******************************************************************************
''')
print("Welcome to Treasure Island.")
print("Your mission is to find the treasure.")
print("You are staning in front of two roads. The left road looks dangerous, while the right one looks safe.")
first = input('Left or Right? L | R ')

if(first == 'L' or first == 'l'):
    print("You get to the end of the road and find a lake. You see something move underwater.")
    second = input('Swim or wait? S | W ')
    if(second == "W" or second == 'w'):
        print("You waited and saw the beast underwater go away, for now. You swim to a cave. You get out of the water and see 3 doors.")
        print("The yellow door has some writing on it. \"heavy is the head...\" ")
        print("The red door shines and you feel warmth around it.")
        print("The blue door is blue.")
        third = input('Which door, Red, Blue or Yellow? R | B | Y ')
        if(third == 'Y' or third == 'y'):
            print(
                'You win! You found the treasure. The treasure is yourself, like in Kung fu Panda :)')
        elif(third == 'R' or third == 'r'):
            print('Burned by fire.\n Game Over.')
        else:
            print('Eaten by beasts. Game Over.')
    else:
        print('Attacked by a trout.\n Game Over.')
else:
    print('Fall into a hole.\n Game Over.')
