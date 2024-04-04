print("Hello would you like to play a game called rock,paper,scissors, there is also a secret one(if u wanan figure it out dont check the code)")
response = input("Yes or no?: ")

if response == "yes":
    print("Okay thats nice")
if response == "no":
    print("Okay go away then.............leave...............................if u dont wanna play go away then")
    quit()

print(f"Hello, Welcome to Rock / Paper / Scissors, you can choose how many rounds you play by pressing Y "
      f"would u like to see the instructions: ")

def statement_generator(statement, decoration):
    print(f"{decoration * 5} {statement} {decoration * 5}")
def instructions():
    print("Instructions go here...")
def instructions():
    statement_generator("instructions","-")
    print('''
-pick either rock/paper/scissors
-if you pick rock and the bot picks scissors you win
-if you pick paper and the bot picks rock you win
-if you pick scissors and the bot picks paper you win
-if u do the same one u both tie    
and if the other away around then the bot wins 
GOOD LUCK!!:
''')
want_instructions = input("press <enter> to read the instructions"
                          "or any key then <enter> to continue: ")
if want_instructions == "":
    instructions()

import random
options = ("rock", "paper", "scissors",)
player_options = ("rock", "paper", "scissors","volcano")
running = True
while running:
    player = None
    computer = random.choice(options)

    while player not in player_options:
        player = input("Enter what you would like to play rock, paper, or scissors and a secret one 🙂: ")
    print(f"Player: {player}")
    print(f"Computer: {computer}")
    if player == computer:
        print("A TIE")
    elif player == "rock" and computer == "scissors":
        print("you have won!")
    elif player == "paper" and computer == "rock":
        print("you have won!")
    elif player == "scissors" and computer == "paper":
        print("you have won!")
    elif player == "volcano" and computer == "paper":
        print("you have won!")
    elif player == "volcano" and computer == "rock":
        print("you have won!")
    elif player == "volcano" and computer == "scissors":
        print("you have won!")

    else:
        print("you have lost.............loser........ahahahahahhaha")
    if not input("press Yes if u wanna continue, press any other key to leave if u wanna leave: ").lower() == "yes":
        running = False

print('''Thanks for playing my paper,scissors,rock"
"credit"
"code:james"
"ideas:James"
"planning:James"
"Everrthing:James"
"making the pizza:James
''')
print("you think this is done????")

print("it is ")
