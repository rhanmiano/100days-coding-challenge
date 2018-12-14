##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 10 - Pangrams
# ”The quick brown fox jumps over the lazy dog”; note how all 26 English-language
# letters are used in the sentence.

# Your goal is to implement a program that takes a string and prints
# either True (the given string is a pangram), or False if it is not.

def isPangram(arg):
  nCount      = 0  
  arg         = arg.lower()
  strAlphabet = 'abcdefghijklmnopqrstuvwxyz'

  strInput = set(arg)

  for i in range(0, len(strAlphabet)):
    if strAlphabet[i] in strInput:
      nCount = nCount + 1

  if (nCount == 26):
    return True
  else:
    return False

user_input = str(input('Check if input is a Pangram: '))

print(isPangram(user_input))