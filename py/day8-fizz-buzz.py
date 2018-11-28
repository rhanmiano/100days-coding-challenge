##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 8 - FizzBuzz Challenge
# Create a program that replicates the famous game Fizz Buzz. The program will take an input, 
# e.g. 20, and then print out the list of Fizz Buzz up to and including that number, where:
#
#   Any multiple of 3 is replaced by the word ‘Fizz’
#   Any multiple of 5 is replaced by the word ‘Buzz’
#   Any multiple of both 3 and 5 is replaced by the word ‘FizzBuzz’

x = int(input("Please enter a digit: "))

def fizzBuzzChallenge(arg):
  for i in range(1, arg+1):
    if(i%15 == 0):
      print("FizzBuzz")
    elif(i%3 == 0):
      print("Fizz")
    elif(i%5 == 0):
      print("Buzz")
    else:
      print(i)

fizzBuzzChallenge(x)