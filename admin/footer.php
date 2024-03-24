##PRACTICAL NO.7


#MINIMUM AND MAXIMUM NUMBER FROM TUPLE

my_tuple=(3,5,7,6,3,2,1)
min_no=min(my_tuple)
max_no=max(my_tuple)
print("original tuple:",my_tuple)
original tuple: (3, 5, 7, 6, 3, 2, 1)
print("mimimum number:",min_no)
mimimum number: 1
print("maximum number:",max_no)
maximum number: 7



#FIND A ERPEATED ITEMS IN TUPLE

def find_repeated_items(my_tuple):
    repeated_items=set()
    unique_items=set()
    for items in my_tuple:
        if item in unique_items:
            repeated_items.add(items)
            else:
            unique_items.add(items)
return repeated items
my_tuple=(1,2,4,6,8,9,6,5)
repeated_items=find-repeated items(my_tuple)
print("original tuple:",my_tuple)
print("repeated items in tuple:",repeated-items)



#PRINT THE NO IN WORDS FOR EX 1234=>ONE TWO FOUR

def number_to_words(number)
digits_words=['zero','one','two','three','four','five','six','seven','eight','nine']
number_str=str(number)
words=[digit_words[int(digit)]for digit in nimber_str]
result=' '.join(word)]
return result
number=1234
result=number_to_words(number)
print(f"{number} in words:{result}")







##PRACTICAL NO 8



#TO CREATE A SET , ADD MEMBER(S) IN A SET AND REMOVE ONE ITEM FROM SET


my_set=set()
my_set.add(1)
my_set.add(2)
my_set.add(3)
my_set.add(4)
print("original set:",my_set)








