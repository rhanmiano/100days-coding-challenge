##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 7 Years in a Range
# Write a program to count the number of years in a range that has a repeated digit.
# For example, 2012 has a repeated digit, but 2013 does not.
# 
# Output should be a list of those years, and the total count.
import datetime

date = datetime.datetime.now()
maxYear = date.year
minYear = 1990

def yearsInRange(startYear, curYear):
  count              = 0
  withRepeatedDigits = []

  for i in range (startYear, curYear+1):
    strTemp = str(i)
    arrTemp = []

    for j in range(0,len(strTemp)):
      char = strTemp[j]

      arrTemp.append(char)

    if(hasRepeatingNums(arrTemp)):
      count = count + 1
      withRepeatedDigits.append(i)
      
  print("Start year: {}  Current Year: {}".format(startYear, curYear))
  print("Years with repeated digits: {}".format(withRepeatedDigits))
  print("Total count: {}".format(count))

def hasRepeatingNums(arg):
  arg = sorted(arg)

  for i in range(0, len(arg)):
    if arg[i] == arg[i-1]:
      return True
      break

yearsInRange(minYear, maxYear)