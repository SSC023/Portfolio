# a great example of a little hashmap
# 🚨 Don't change the code below 👇
print("Welcome to the Love Calculator!")
name1 = input("What is your name? \n")
name2 = input("What is their name? \n")

dicto = {'t': 0, 'r': 0, 'u': 0, 'e': 0, 'l':0, 'o':0, 'v':0}
sentence = ""
for i in name1.lower():
    if(i in dicto):
        dicto[i] += 1
    else:
        continue
for j in name2.lower():
    if(j in dicto):
        dicto[j] += 1
    else:
        continue
sum1 = dicto['t'] + dicto['r'] + dicto['u'] + dicto['e']
sum2 = dicto['l'] + dicto['o'] + dicto['v'] + dicto['e']
total = str(sum1) + str(sum2)
totalnum = int(total)
if(totalnum < 10 or totalnum > 90):
    sentence = ", you go together like coke and mentos."
elif(totalnum > 40 and totalnum <50):
    sentence = ", you are alright together."
else:
    sentence = "."
print(f"Your score is {total}{sentence}")
