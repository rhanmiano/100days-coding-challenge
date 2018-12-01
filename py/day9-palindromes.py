##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 9 - Palindromes
#  Write a program that checks if a string entered by the user is a palindrome. 
#  A palindrome is a word that reads the same forwards as backwards like “racecar”

# Used an existing function created in Day 3 challenge
# to reverse a string and created a function
# to check where the given parameter is equals to
# the reversed one.

def reverseString(args):
  reversedStr = ''
  startIndex  = -1
  
  for i in range(-1, -(len(args) + 1), -1):
    reversedStr = reversedStr + args[i]
    
  return reversedStr

def isPalindrome(args):
    reversedStr = reverseString(args)

    if(args == reversedStr):
      return True
    else:
      return False

temp = str(input('Please input a string: '))

print('Is \'{}\' a palindrome?: {}'.format(temp, isPalindrome(temp)))
