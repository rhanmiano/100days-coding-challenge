##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 3 Reverse a string
#
# Init a string variable that will hold the reversed
# string. Set a -1 index and loop through a range of
# the startIndex up to the negative value of the length
# of the string. Third param for range is the step w/c
# the iterator should take. A value of -1 is being added,
# so that iteration would run backwards. Each args[i]
# is then concatenated to reversedStr.

def reverseString(args):
	reversedStr = ''
	startIndex  = -1
	
	for i in range(-1, -(len(args) + 1), -1):
		reversedStr = reversedStr + args[i]
		
	return reversedStr
	
print(reverseString("Hope you're doing good"))
# TODO validate if param is string