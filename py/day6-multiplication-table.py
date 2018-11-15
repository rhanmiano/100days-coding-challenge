##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 6 Multiplication Table
#   Write a probram that prints a multiplication table for numbers up to 12.

table = ''
for i in range(1, 13):
  product = 0

  for j in range(1, 13):
    product = i * j

    table = table + str(product) + '\t'

  table = table + str(product) + '\n'

print(table)