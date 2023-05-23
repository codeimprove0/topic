
VS code open 
1) python extension search & install


Video 1---------------- 

1) 
print ("hello  world")
print ('hello  world') 

print ("hello 'test' world")
print ('hello "test" world')
-------------------------------------------
2) 
escape sequences 
\'          single quotes
\"          double quotes 
\\          baskslash
\n          new line
\t          tab
\b          backspace
 
backslash : escape sequence
print ("hello \"test\" world")  \\    \' \" 
print("h1 \n h2")
print('Hello \\ world') // print \ use \\ 
print("h1 \bh2") // remove backside 1 space 



print("hello \\n world")
or 
r (RAW String)
print(r"hello \n world")  

---------------------------------------------- 
3) comment 
use # 
or VS code ctrl + /

---------------------------------- 
4) calculate value/ operator 

    1) Addition + 
    2) Subtraction - 
    3) Multiplication * 
    4) Division /     print( 6/3) return 2.0 
    5) Interger division //  print( 6//3) return 2 
    6) Modulo   %
    7) Exponent **  // print( 5**3) // 125 

round 
print( round(7/3,2))  // 2.33 
print( round(7/3,1)) // 2.3    


------------------------  
5) Variable 
num = 12
num = "One"
print (num)


fname,lname,age  =  'code','improve',12
print (fname+' '+lname+ ' '+str(age))   // num can not join with string so covert by str

variable start with :-- letter, _name
not start with number & inside varible not allow to special char like % $

-------------------------------  

6) String Concatenation 

fname = 'code'
lname = 'improve'
print(fname +' '+ lname)
print(fname +' '+ lname + str(11)) // correct 
print(fname +' '+ lname + "11") // correct 
print(fname +' '+ lname + 11) // error
print((fname +' '+ lname) * 3) // multiple value

--------------------------------- 
7) User Input 

name = input("Your Name : ") 

print ("Hello "+ name)

mark1 = input("Math : ") 
// mark1 = int(input("Math : "))
mark2 = input("English : ")
total = int(mark1) +  int(mark2) 

print ("total " + str(total))  

Two Input Field Get 
----
name,age = input("Your Name & Age ").split("$");    // split(""); use space 

print ("Name is :"+name);
print ("Age is :"+age);

-------------------------------------

8) String Format 

name,email = "code improve","code@test.com"

print ("Name is :"+name+" Email is "+email);  
print ('Name is : {} Email is {}'.format(name,email)) // python3 
print (f'Name is : {name} Email is {email}')   // python3.6

----------------------------------------------  

9) string index 
name = 'codeimprove'

print (name[0])  // start 0 to num
 
print last word use -1  
print (name[-1])

--------------------------------------------  
10)  string slice 

name = 'codeimprove'

print (name[4:11])  // improve
print (name[0:4])  // code  get only end 4 not 4 last index is 3

or 
print (name[4::]) // print all afer 4 anw: improve

print(name[::-1])
    or 
print (name[-1::-1]) // reverse string

-------------------------------------  
11) string step argument

name = 'codeimprove'

print (name[0:4:2])  // cd  
print (name[0:11:2]) // step number is 2
or same as 
print (name[0::2]) 

----------------------------------  
12) String methods 

1) len ()
print (len(name)) // 11

2) lower()
name = 'CodeImprove' 
print (name.lower())

3) upper()
name = 'CodeImprove' 
print (name.upper())

4) title()
name = 'code improve' 
print (name.title())  // first word caps
 
5) count()
name = 'code improve' 
print (name.count('o'))  //  2 count word enter into count 

6) strip() , lstrip(), rstrip()

name = ' code improve ' 
print ("=="+name.strip()+"==")

7) replace()
name = 'code improve' 
name.replace("code","demo")

or 
name = 'code improve code' 
print (name.replace("code","demo",1))   / 1 replace only first word

8) Find() 

name = 'code is improve is code' 
pos =  name.find("is"); // 5
print (pos)
print (name.find("is",5+1)) // second parameter find after 5 pos

9) Center()
name = 'code'  
print (name.center(5,'*'))  // *code 
print (name.center(6,'*'))  // *code*
print (name.center(11,'*'))  //

--------------------------------------------------------------  

13)  conditions if
    1) if  

    num = 13

    if num  > 12:
        //print ("OK") 
        pass   // not write anything

        or empty check 
    num = ''

    if num:
        print ("OK") 
    else :
        print('noo')

    2) else 
    num = 12

    if num  > 12:
        print ("OK")
    else :
        print('noo')   

    
    3) else if

    num = 12

    if num  > 12:
        print ("OK")
    else :
        if num ==12 :
            print('good')    
        else :
            print('wooo')

    4)  and / or 
    pt = 10
    if num  > 12 and pt ==10:


    5) if elif else  
        num = 9 

        <!-- if 0<num<10:
            print ("OK")
        elif 10<num<15 : 
            print('good')    
        else :
            print('wooo'); -->

            or 
        elif num > 10 and num < 15 : 

    6) if in        
    num = 'code improve'

    if 'code' in num:
        print ("OK") 
    else :
        print('noo')

        not in 
    if 'codess' not in num:
-----------------------------------------  
14) while loop  

num = 1

while num < 10:
    print( num)
    num = num + 1

----------------------------------------------------- 
15) for loop 
    1) 
    for i in range (1,11):
        print(f"number is :{i} ")

    2)    or skip range 
    for i in range (1,11,2):    

    3)   now reverse order 
    for i in range (10,-1,-1):
        print(f"number is :{i} ")    

     4)  in 
    name = 'code improve'
    for i in name:
        print(i)   

 16) continue / break 
  
for i in range (1,11):
    if i  == 4:
        continue 

    print(f"number is :{i} ")


-------------------------------------------------------

16) Random num generate 
 
import random 
print( random.randint(1,10))

------------------------------------------------- 

17) Function 

 
def addSum(a,b):
    print("A===="+str(a)+" B===",str(b))
    return a+b

print(addSum(12,10))

default paramter  // addSum(a)  // def addSum(a,b=100)

------------------------------------------------- 
18) Global & local variable 

num = 10 
def addSum(a,b=100):
    global y
    x = 20
    y = 200
    print("A===="+str(a)+" B===",str(b))
    return a+b+num

print(addSum(12))
 
print(y) 

------------------------------------------  
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++ VIDEO 
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

19) list 
1) 
num =  [1,2,3,4,5]

names = ['A','B','C','D']

print (num[0])

print (names[:2])  // pos print first 2
print (names[-1]) // print last same work as in string 

names[4:] =['X','Y','Z'] 

add more after 4 pos  

2) append  
names.append('TEST')

3)  insert 
names.insert(2,'TEST')   // postion 2

4) combine  +
names = ['A','B','C','D']

names2 = ['X','Y']
final  = names + names2
print (final)


5) extends  
names2 = ['X','Y'] 
names2.extend(names)  // not use append is only for single value 

6) delete 
 
names.pop(0) // return remove value 
del names[0]
#names.remove('A')

7) count 
names = ['A','B','C','D','A']
 
print (names.count('A'))  // A is 2 time 

8) sort list 
names.sort()
print (names)
or  
print (sorted(names))

9) clear 
names.clear() // clear list 

10) copy 
nm2 = names.copy() // copy names list into nm2

11) Index 
names2 = ['X','Y',"AA"]  
print (names2.index('AA'))
or 
num = [1,2,3,4,5,6,7,8]

print (num.index(60,4,8))    // find 60 should be in 4 to 8

12) check two list

names = ['A','B']
names2 = ['A','B'] 

print (names == names2)

13) max , min 
num = [40,54,34,88,60]  
print (min(num))
print (max(num))

14) array to string or string to array 


names = ['A','B'] 

print (','.join(names))

txt = 'code test' 
print (txt.split(' '))

txt2 = 'code,test' 
print (txt2.split(','))


-------------------------------------------------------------  
20) Tuples tu ples


tuples are immutable (can't be chanaged)
no append,insert,pop ,remove 
faster than list 
store any datatype like list 


1) 
days =  ("sun","mon","tues","wed")

print(days)

2) count 

days =  ("sun","mon","tues","wed",'sun') 
print(days.count('sun'))

3) len  
print(len(days))

4) slicing
print(days[1::]) // after sun print all
print(days[:2]) // print starting two 
print(days[::2]) // skip 2 no 

5) days[1] = "A" can't assign give error 

6) type // check type 

days =  ("sun","mon","tues","wed")
num = [1,2,3]
print(type(days))
print(type(num))

7) tuples
also tuples  without parenthesis
days = "sun","mon","tues" 
print(days)
print(type(days))

8) get single tuple value 

days = ("sun","mon","tues") 

sun,mon,tues = (days)
print(sun)
print(type(days))

9) min, max , sum 

marks = (90,88,78,45) 
print(marks)
print(min(marks))
print(max(marks))
print(sum(marks))

10) inside tuple list add, delete ,append 

Note :- but this is not right way to use tuple

days = ("sun",[10,30,40]) 
 
# days[1].pop()
days[1].append(90)
print(days) 
print(type(days)) 

Note :- but this is not right way to use tuple


---------------------------------------------------------------- 

21) Dictinaries
Dictionaries are used to store data values in key:value pairs.
A dictionary is a collection which is ordered*, changeable and do not allow duplicates.

1) Create 
userInfo  = {
    'name':'code',
    'email':'test@gmail.com',
    'marks':100
} 
print (type(userInfo))

or 
userInfo = dict(name='code',email='test@gmail.com',marks=100)

2) print single value 
print (userInfo['name'])

3) store any type string, number, list

userInfo  = {
    'name':'code',
    'email':'test@gmail.com',
    'marks':100,
    'lits':[10,20,30],
    'address':{
        'state':'BA',
        'city':'PP'
    }
}

4) check key exist or not 
if 'emails'  in userInfo :
    print("ok")
    
5) check value exits or not 

if 'code'  in userInfo.values() :
    print("ok")

    or int num must be check in int
if 100 in userInfo.values() :
    print("ok")    

    or complete list check 
    if [10,20,30] in userInfo.values() :
    
6)     for loop 
print all key 
for item in userInfo:
    print(item) #print all key 

    print all value 
for item in userInfo.values():
    print(item) #print all key 

    or 
    for item in userInfo:
    print(userInfo[item])


7) items 
userItem = userInfo.items()
print (userItem)
print (type(userItem))    

for key,value in userItem:
    print (key +' '+str(value))
    print(f'key is {key} value is {value}')


8) Add , remove 
add :-- 
userInfo['lname'] = 'ok'
userInfo['list2'] = [34,35]  #can be overwrite list but here use list2

remove :---
#userInfo.pop('name')
print(userInfo.pop('name'))    

update :--
extraInfo = {
    'name':'New data',
    'test':'testing'
} 
userInfo.update(extraInfo)  
or 
userInfo.update({}) /// no new key added
print( userInfo)


9) fromkeys in dic 

data = dict.fromkeys(['name','email','phone'],['test','test@gmail.com','989898989'])

or single value pass to all

#data = dict.fromkeys(['name','email','phone'],'NA')

#data = dict.fromkeys(('name','email','phone'),'NA')  # use with tuple

data = dict.fromkeys("name",'NA')  # split all seperate like n a m e
print (data)

or range 
data = dict.fromkeys(range(1,5),'NA')  
print (data)


10) get 
data =  {
    'name':'code',
    'email':'test@gmail.com'
}
#print (data['names'])  # give error
print (data.get('names'))  # if not match give none

custom return None in get 
print (data.get('names','No Data')) 


11) clear
data.clear()

12) copy 

#d2 = data.copy()
d2 = data
data.clear()
print (data) 

print(d2)

d2 = data 
print (d2 is data) // true 
 
d2 = data.copy() 
print (d2 is data)  // false bcz not same dict 


########################################################
#########################################################

22) Sets 
unordered collection of unique data

1) 
s = {1,2,3,1}  /// no duplicate value store

can store num , string but dictinary , list can not be store

lists = [1,2,3,1,1] 
newSet = set(lists)
newList = list(newSet)

print(s) 
print(lists)

print(newSet)
print(newList)

2) add
s.add(4) 
s.add(5)
print(s)   

3) remove 
s.remove(3) 

or 
s.discard(3) 
print(s.discard(32) )  // return none 
s.remove(32) // no value find give error

4) clear
s.clear() 

5) copy
 
s2 = s.copy()
print(s)   
print(s2)

6) union 
s2 = {4,5}

newOne = s | s2
print(s)    
print (newOne)

7) intersection 
s = {1,2,3}
s2 = {2,3,4}

newOne = s & s2
print(s)    
print (newOne)  // return 2,3 common in both


------------------------------------------------------------  

23) List comprehension 

1) 
num = []

for i in range(1,11):
    num.append(i*2)


num2 = [i*2 for i in range(1,11)]

print(num2)
print (num)  

2) In string

names = ['Ram','Mohan','Shiv']
num = []

for item in names:
    num.append(item[0])


num2 = [item[0] for item in names]

print(num2)
print (num)  

3) if condition

num = []

for i in range(1,11):
    if i > 5:
        num.append(i)
     
num2 = [i for i in range(1,11) if i>5]

print(num2)
print (num)  
  - - - - - - - - - - - - - - - - - - - - - 
or  use   if i > 5 and i< 8:
num = []

for i in range(1,11):
    if i > 5 and i< 8:
        num.append(i)
     
num2 = [i for i in range(1,11) if (i>5 and i <8)]
<!-- 
print(num2)
print (num)   -->


4) if else condition

num = []

for i in range(1,11):
    if i > 5 and i< 8:
        num.append(i)
    else :
        num.append(i+100)    
     
num2 = [i if (i>5 and i <8) else (i+100) for i in range(1,11)]

<!-- print(num2)
print (num)   -->

--------------------------------------------------------------

24) Dictionary comprehension 
        same set comprehension only unique itme exists

record = {1:1,2:4,3:9,4:16,5:25}

newRecord = { i:i**2 for i in range(1,6) }
or 
newRecord = { f"{i}_value":i**2 for i in range(1,6) } 

# of if condition 
newRecord = { i:(i**2 if i < 4 else i**3) for i in range(1,6) }

print(record)
print(newRecord)

---------------------------------------------------------------- 

25) * args 

1) 
# def sum(a,b):
#     return a+b 

def sum(*args):
    total = 0
    for num in args:
        total +=num
    return total    


print(sum(10,20,40,50,60))
 
2) multiple parameter 
def sum(num1,num2,*args):
    total = 0
    print(num1)
    print(num2)
    print(args)
    for num in args:
        total +=num
    return total    


print(sum(10,20,40,50,60))

3) unpack use * 
def sum(*args):
    total = 0 
    print(args)
    for num in args:
        total +=num
    return total    

values = [10,20,40,50,60]
# print(sum(10,20,40,50,60))
print(sum(*values))  # for unpack use *

---------------------------------------------------  
26) **kwargs  (keyword arguments)

def userFn(**kwargs):
    print(kwargs)
    #print(kwargs.items())
    for k,v in kwargs.items():
        print(f"{k} : {v}")


# userFn(fname='code',lname='improve')     
dt = {'name':'code','lname':'improve'}
userFn(**dt)   # unpacking **

-------------------------------------------------------------  
================================================================= 
=================================================================
27) Lambda expression (anonymous function)

1) 
def sum(a,b):
    return a+b 


addnew = lambda a,b : a+b
print(sum(10,20))     

print(addnew(20,30))

print(addnew) # print lamda 
print(sum) # frint sum fn at location

2) if else use lambda 

def sum(a,b):
    if(a>10):
        return a+b+100
    else :
        return a+b     


addnew = lambda a,b : a+b+100 if a > 10 else a + b
print(sum(20,30))     

print(addnew(20,30))


----------------------------------------------------------------- 
28) Enumerate function 

names = ['A','B','C']

#print(names.index('B'))

index = 0
for name in names :
    #print(name)
    print(f"{index} {name}")
    index = index + 1
 

for index, name in enumerate(names):
    print(f"{index} {name}") 

---------------------------------------------------  
29) Map function

def add100(a):
    return a+100


nums = [1,2,3]

# newNum = list(map(add100,nums))
#newNum = list(map(lambda a:a+100,nums))  # with lambda fn
 
newNum = [a+100 for a in range(1,4)]

print(newNum)


2) in pre define fn easy use map
nums = ['code','improve','email']

 
l = map(len,nums)

for i in l :
    print(i)


----------------------------------------------  

30) filter function 

def highest(a):
    return a>100


num  = [1,22,34,100,110,3000,450]

# newList = list(filter(highest,num))
# print(newList)


# use lambda 
# newList = filter(lambda a:a>100,num)

# for i in newList:
#     print(i)

----------------------------------------  
31) zip function 

 
ids = [21,24,55]
names = ['ram','mahesh','mohan']

# record = list(zip(ids,names))
record = dict(zip(ids,names))

print( record.items())

for k,v in record.items():
    print(f"{k} : {v}")
print(record)

2) 

lists = [(1,2),(10,20),(100,300)] 

for i in zip(*lists):
    print(i)
 
print(list(zip(*lists)))
 

l1,l2 = list(zip(*lists)) 
print(list(l1))
----------------------------------------  
32) all & any function 
 
newList = [True,True,True,True]

newList2 = [True,False,True,True]

print (all(newList))
print (all(newList2))

print (any(newList2))

2) 
lists = [2,3,4,5]

newList = [num>1 for num in lists]
#newList = [num>2 for num in lists]
#print (list(newList))

print (any(newList)) 

-------------------------------------------------------  

33) max & min function 

lists = [2,3,4,5] 
 
print(min(lists))

2) 

names = ['mahesh','mohan','ram'] 
def lenFn(str):
    return len(str)

print(max(names,key=lenFn))    
print(min(names,key=lenFn))    

3) with lambda fn
print(min(names,key=lambda str: len(str)))    

4) with dictionary object find max, min 

userInfo = [
    {
        'name':'ram','age':23
    },
       {
        'name':'mahesh','age':33
    },
       {
        'name':'mohan','age':40
    }
]  
def lenFn(ob):

    return ob['age']

print(max(userInfo,key=lenFn))      

# print(min(userInfo,key=lenFn))    
print(max(userInfo,key=lambda ob : ob['age']))    


---------------------------------------------- 
34) sort 
names = ['mahesh','vishnu','ram'] 
names.sort()
print(names)

names = ('mahesh','vishnu','ram') #tuples immutable
print(sorted(names))
print(names)

names = [10,100,20,30] 
names.sort()
print(names)

2) 

userInfo = [
    {
        'name':'ram','age':23
    },
       {
        'name':'mahesh','age':33
    },
       {
        'name':'mohan','age':40
    }
]  
def lenFn(ob):

    return ob['age']
     

print(sorted(userInfo,key=lenFn))    
print(sorted(userInfo,key=lambda ob : ob['age']))   # with lambda

 -------------------------------  

35) function doc message

def lenFn(ob):
    ''' any message '''
    return ob['age']
      
 
# print(sum.__doc__)
# print(min.__doc__)

print(lenFn.__doc__)

====================================================== 
++++++++++++++++++++++++++++++++++++++++++++++++ 
2:40 hr 

 
36) function return function 
def cal(a):
    return a+100 


myfn = cal  
print(myfn(10))

2) 
def cal(a):
    def result(b):
        return a+b
    return result    

# f1 = cal(20) 
# print(f1(30))

f1 = cal 
print(f1(30)(10)) 
or 
print(cal(30)(10))

--------------------------------------------  

37) Decorators  
1) 
def fn1():
    print('fn1 called') 

def fn2():
    print('fn2 called') 

fn1()   # check validate or add some extra functionality line
fn2()       


2) create custom decorator functionality 

def decorator_fn(pass_fn):
    def wrapper_fn():
        print ('check validate or add some extra functionality line')
        pass_fn()
    return wrapper_fn

--   -   --   --  
def fn1():
    print('fn1 called') 
myfn = decorator_fn(fn1)    
myfn()
 
3) add @ is called decorator 

@decorator_fn
def fn1():
    print('fn1 called')  

fn1()
 

4) 
def decorator_fn(pass_fn):
    def wrapper_fn(*args,**kwargs): 
        print ('check validate or add some extra functionality line')
        return pass_fn(*args,**kwargs) 
    return wrapper_fn

@decorator_fn
def add(a,b): 
    print('fn1 called')  
    return a+b


# add(12,30)
print(add(12,30))
 

5) __DOC__ string 

same as above code only add 

from functools import wraps 
@wraps(pass_fn)

--- - -- - - - - - -
from functools import wraps 
def decorator_fn(pass_fn):
    @wraps(pass_fn)
    def wrapper_fn(*args,**kwargs): 
        ''' wrapper function '''
        print ('check validate or add some extra functionality line')
        return pass_fn(*args,**kwargs) 
    return wrapper_fn

@decorator_fn
def add(a,b): 
    """ add function """
    print('fn1 called')  
    return a+b


# fn1(12,30)
# print(fn1(12,30))
 
print(add.__doc__)
print(add.__name__)

6) add every fn if 100 > value add some amount 

from functools import wraps 
def decorator_fn(pass_fn):
    @wraps(pass_fn)
    def wrapper_fn(*args,**kwargs): 
        ''' wrapper function '''
        newArgs = args
        if args[0] > 100 :
            # print(type(args))
            print(list(args))
            newArgs = list(args)
            newArgs.append(1000)
            newArgs = tuple(newArgs)
            print(newArgs)

        print ('check validate or add some extra functionality line')
        return pass_fn(*newArgs,**kwargs) 
    return wrapper_fn

@decorator_fn
def add(*args):  
    """ add function """
    print('fn1 called') 
    return sum(args) 

 
print(add(101,200)) 
 

====================================================== 
++++++++++++++++++++++++++++++++++++++++++++++++ 
3:00 hr 

37) OOP Create first class create 
def __init__ :-- method, constructor
self.first_name = fname  :- instance variable 
fname,lname,email :-- attributes
u1 :-- object 

1)  OOP Create first class create 

class User:
    def __init__(self,fname,lname,email):
        self.first_name = fname
        self.last_name = lname
        self.email = email 


u1 = User('Ram','Singh','ram@gmail.com')

u2 = User('Aman','Singh','aman@gmail.com')
print(u1.first_name)
print(u2.email)




2) OOP create Instance Methods 

class User:
    def __init__(self,fname,lname,email):
        self.first_name = fname
        self.last_name = lname
        self.email = email 
    
    def fullName(self):
        return f"{self.first_name} {self.last_name}"
     
u1 = User('Ram','Singh','ram@gmail.com')

u2 = User('Aman','Singh','aman@gmail.com')
print(u1.fullName())
print(u2.fullName())

--  ---    -----   ---  ---- 
or with argument 

print(u2.fullName('Mr')) # Mr Ms, Mrs, Miss, Ms 

or 
def fullName(self,prefix):
        return f"{prefix} {self.first_name} {self.last_name}"


3) Class variable add & all variable is public not private 
just add bonus  = 2000 

class User:
    bonus  = 2000
    def __init__(self,fname,lname,email,salary):
        self.first_name = fname
        self.last_name = lname
        self.email = email 
        self.salary = salary
    
    def fullName(self,prefix):
        return f"{prefix} {self.first_name} {self.last_name}"

    def getSalary(self):
        return self.salary + User.bonus
     

u1 = User('Ram','Singh','ram@gmail.com',10000) 
u2 = User('Aman','Singh','aman@gmail.com',20000) 
print(u2.getSalary())  

# print(User.__dict__)  // get all info about User Class, variable

4) User.bonus replace Self.bonus 

class User:
    bonus  = 2000
    def __init__(self,fname,lname,email,salary):
        self.first_name = fname
        self.last_name = lname
        self.email = email 
        self.salary = salary
    
    def fullName(self,prefix):
        return f"{prefix} {self.first_name} {self.last_name}"

    def getSalary(self):
        return self.salary + self.bonus
     

u1 = User('Ram','Singh','ram@gmail.com',10000) 
u2 = User('Aman','Singh','aman@gmail.com',10000) 
print(User.bonus)
u2.bonus = 500 # not affect so change in getSalary fn replace "User.bonus" to "self.bonus"
print(u2.bonus)
print(u2.getSalary())  
print(u1.getSalary())  


5) check how many instance of class
class User:
    count  = 0
    def __init__(self,fname):
        User.count += 1 
     
     

u1 = User('Ram') 
u2 = User('Aman') 
u2 = User('Aman') 
print(User.count) 

6) Class method decorator 

class User:
    count  = 0
    def __init__(self,fname,lname):
        User.count += 1 

    @classmethod
    def countAll(cl):
        return f"created instance {cl.count}  {cl.__name__}"   
     
     

u1 = User('Ram','Singh') 
u2 = User('Aman','Raj') 
u2 = User('Aman','Raj') 
print(User.count)
print(User.countAll())

or using class method can create instance 
_________________________________________________ 

class User:
    count  = 0
    def __init__(self,fname,lname):
        User.count += 1
        self.first_name = fname
        self.last_name = lname

    @classmethod
    def countAll(cls):
        return f"created instance {cls.count}  {cls.__name__}"  

    @classmethod
    def createOb(cls,str):    
        fname,lname = str.split(',') 
        return cls(fname,lname)

    def fullName(self):
        return f"{self.first_name} {self.last_name}"     
     
     

u1 = User('Ram','Singh')  
u2 =  User.createOb('Code,Improve')
 
print(u2.fullName())  


7) Static Method


class User:
    count  = 0
    def __init__(self):
        User.count += 1 

    @staticmethod
    def message():
        print ("Static method called")
     
      
 
User.message()


8) @Property decorator  & setter or getter 


class User:
    count  = 0
    def __init__(self,fname,lname):
        User.count += 1
        self.first_name = fname
        self.last_name = lname

    @property  #getter
    def firstName(self):
        return 'Mr '+self.first_name    

    @firstName.setter
    def firstName(self,value): 
        self.first_name = value+' ji'        
 
    @property  #getter
    def fullName(self):
        return f"{self.first_name} {self.last_name}"     
     
     

u1 = User('Ram','Singh')   

u1.firstName = 'TEST'  # setter 2 step
print(u1.fullName)
print(u1.firstName)  # call like variable not function



====================================================== 
++++++++++++++++++++++++++++++++++++++++++++++++ 
3:26 hr 

38) Inheritance 
1) Single Inheritance  
class User: 
    def __init__(self,fname,lname,email):  
        self.first_name = fname 
        self.last_name = lname 
        self.email = email 

    def fullName(self):
        return f"{self.first_name} {self.last_name}" 

 
 
class Employee(User):
    def __init__(self,fname,lname,email, salary,area,store) :
        #User.__init__(self,fname,lname,salary)  #not for use 
        super().__init__(fname,lname,email)  
        # self.first_name = fname 
        # self.last_name = lname 
        self.salary = salary 
        self.area = area
        self.store = store

    def fullName(self):
        return f"{self.first_name} {self.last_name}"    
 
  
user1 =  User('code','improve','code@gmail.com')

e1 =  Employee('Raja','Singh','ram@gmail.com',200000,'West','Chai') 
print(m1.fullName()) 




2) convert into inheritance


 
class User: 
    def __init__(self,fname,lname,email):  
        self.first_name = fname 
        self.last_name = lname 
        self.email = email 

    def fullName(self):
        return f"{self.first_name} {self.last_name}" 

 
 
class Employee(User):
    def __init__(self,fname,lname,email, salary,area,store) :
        #User.__init__(self,fname,lname,salary)  #not for use 
        super().__init__(fname,lname,email)  
        # self.first_name = fname 
        # self.last_name = lname 
        self.salary = salary 
        self.area = area
        self.store = store

    # def fullName(self):
    #     return f"{self.first_name} {self.last_name}"    
  

user1 =  User('code','improve','code@gmail.com')

e1 =  Employee('Raja','Singh','ram@gmail.com',200000,'West','Chai') 
print(e1.fullName()) 


---------------------------------------------  

39) Multilevel inheritance , MRO , Method Overriding : Python tutorial 200

 
class User: 
    def __init__(self,fname,lname,email):  
        self.first_name = fname 
        self.last_name = lname 
        self.email = email 

    def fullName(self):
        return f"{self.first_name} {self.last_name}" 

 
 
class Employee(User):
    def __init__(self,fname,lname,email, salary,area,store) :
        #User.__init__(self,fname,lname,salary)  #not for use 
        super().__init__(fname,lname,email)  
        # self.first_name = fname 
        # self.last_name = lname 
        self.salary = salary 
        self.area = area
        self.store = store

    # def fullName(self):
    #     return f"{self.first_name} {self.last_name}"   

    def getSalary(self):
        return self.salary  
 

class Manager(Employee):
    def __init__(self,fname,lname,email, salary,area,store,gadi) : 
        super().__init__(fname,lname,email,salary,area,store)    
        self.gadi = gadi 

    def getCar(self):
        return self.gadi  

user1 =  User('code','improve','code@gmail.com')

e1 =  Employee('Raja','Singh','ram@gmail.com',200000,'West','Chai') 
print(e1.fullName()) 

m1 =  Manager('Raja','Singh','ram@gmail.com',200000,'West','Chai','Scooty') 
print(m1.getCar()) 


2) find Method resolution order :- MRO  
#help(m1)
or 
print(Manager.mro())
print(Manager.__mro__)

fn search first Manager then employee then user 

3) cal overwrite fn 

add fn in Manager cls 
def fullName(self):
        return f"{self.first_name} {self.last_name} iokk"    

then print  show Manager its MRO 
print(m1.fullName())         

4) isinstance : isinstance (createObj, className)

 
print(isinstance(user1,User))   # true 
 
print(isinstance(e1,User))   # true 
print(isinstance(m1,User))  # true

print(isinstance(m1,Manager)) # true
print(isinstance(e1,Manager)) # false


5) issubclass(Top,Down)  (Parent,Child)

print(issubclass(User,Employee))  # false

print(issubclass(Employee,User))  #true 
print(issubclass(Manager,User))  #true 


-----------------------------------------  

4) Multiple Inheritance

class A:  
    def a_info(self):
        return "a info" 

    def message(self):
        return 'message A'    

class B:  
    def b_info(self):
        return "B info" 

    def message(self):
        return 'message B'   
 
class C(A,B):  
    def c_info(self):
        return "C info" 


allCls = C()

print(allCls.a_info())
print(allCls.b_info())
print(allCls.c_info())

print(allCls.message()) # call A fn if you want B fn use class C(B,A): 

print(C.__mro__) # after change  class C(B,A):  again run


5) Special magic  method or dunder method

 
class C():  
    def __init__(self,fname,lname):
        self.first_name = fname
        self.last_name = lname


    def c_info(self):
        return "C info" 

    def __str__(self):
        return f"{self.first_name} {self.last_name}"    

    def __repr__(self):
        return f"Mr {self.first_name} {self.last_name}"    

    def __len__(self):
        return len(self.first_name)    


allCls = C('code','improve')

# print(allCls)

# if both same time str repr

print(allCls)

# print(allCls.__str__())
# print(allCls.__repr__())

# print(str(allCls))
# print(repr(allCls))
print(len(allCls))



====================================================== 
++++++++++++++++++++++++++++++++++++++++++++++++ 
3:50 hr 

40) Error

1) Syntax Error 
2) Indentation Error   
3) Name Error  
4) Value Error   
5) Type Error  
6) Index Error   
7) Attribute Error  
8) Key Error   

1) Syntax Error (while not writing correct syntax)
num = 10 
print num

or 
def add:
    return 10

2) indentation errors 
def add():
return 10

3) Name Error 
print(num)
print(add())

4) Value error 
# num = "12"
num = "12dfdfd"
print(int(num))

5) Type Error 
print(5+'code')

6) index error 
nums = [10,20,30]
print(nums[4])

7) attribute error 

nums = [1,2,3]
nums.multiply(1)

8) key error 
info = {
    'name':'code'
}

# print(info['name'])
print(info['email'])

---------------------------------------------  

41) Raise Error 

def checkId(num):
    if num > 100 :
        return num+100
    # raise TypeError('Type error')  
    #raise ValueError('Value error')   
    raise NotImplementedError('Not Exist function')  


print(checkId(20))

42) try , expect 

1) 
def checkId(num):
    try :
        myNum = int(num)

    except KeyError:
        print ('except 4')

    except ValueError:
        print ('except 3')    

    except :
        print ('except')    
    return  1     

# print(checkId(20))
print(checkId("aaa"))

2) else & finally

def checkId(num):
    try :
        myNum = int(num)

    except KeyError:
        print ('except 4')

    except ValueError:
        print ('except 3')    

    except :
        print ('except')    

    else :
        print(myNum)   

    finally :
        print('Final must')     
    return  1    



# print(checkId(20))
print(checkId("aaa"))
print(checkId(44)) #else

-------------------------------------------------------- 

43) Read Text Files 

1) Read Text Files 


f =  open('info.txt')

print(f.read())
print(f.read()) # not read data cursor move to end in first time

f.close()

or 
 
f =  open('info.txt')
print(f.tell())  # help to find out cursor point line
print(f.read())
print(f.tell())  # help to find out cursor point line
print(f.read()) # not read data cursor move to end in first time
print(f.tell())  # help to find out cursor point line


f.close()

2) seek cursor position set 

#f =  open('info.txt','r')
f =  open('info.txt')

print(f.read())
print(f.tell())  

f.seek(0)
print(f.tell())  

print(f.read()) 

f.close()


3) readline : read line by line

f =  open('info.txt') 

print(f.readline())
print(f.tell())   

print(f.readline())
print(f.tell())  

f.close()


or 

 
f =  open('info.txt')
 
print(f.readline(),end="") 
print(f.readline(),end="") 
print(f.readline()) 

f.close()


4) readlines 

f =  open('info.txt')
  
# print(f.readlines())  
lines = f.readlines()
print(len(lines)) 

f.close()

or  
f =  open('info.txt') 

lines = f.readlines() 
for line in lines :
    print(line,end='')


f.close()

5) get file name or check closed file

f =  open('info.txt')  
 
print(f.name) 
print(f.closed)

f.close()
print(f.closed)


6) file open by path 
 
f =  open('/home/vishnu/Documents/db.txt') 

# f =  open(r'/home/vishnu/Documents/db.txt')   
print(f.readline())

f.close() 



7) file read with help of block 

with open('info.txt') as f:
    print(f.read())  # don't need to close file in this way


print(f.closed)    

------------------------------------------------------  

44) Write  

1) create file

with open('info2.txt','w') as f:
    f.write('code improve3')

2) overwrite data 
with open('info2.txt','w') as f:
    f.write('code improve2')
 
3) append  (its also create new file if not exists)
with open('info2.txt','a') as f:
    f.write('\ncode improve3')


4) r+ read & write 

with open('info2.txt','r+') as f:
    f.write('\ncode improve3')   # write starting & remove some word  

    or 
with open('info2.txt','r+') as f:
f.seek(len(f.read()))
f.write('\ncode improve3')


---------------------------------------------------------  

45) csv read  

1) 
from csv import reader

with open('books.csv','r+') as f:
    csv_reader = reader(f)
    # next(csv_reader) # hide first row

    for row in csv_reader:
        print(row)


2) DictReader     

from csv import DictReader

with open('books.csv','r+') as f:
    csv_reader = DictReader(f) 

    for row in csv_reader:
        print(row['name'])

3) write csv 

from csv import writer

with open('books2.csv','w') as f:
    csv_wr = writer(f) 

    csv_wr.writerow(['name','email']) 
    csv_wr.writerow(['ram','ram@gmail.com']) 
    csv_wr.writerow(['mohan','mohan@gmail.com'])  
    

4) write csv with dicWriter 
from csv import DictWriter

with open('books3.csv','w') as f:
    csv_wr = DictWriter(f,fieldnames= ['name','email']) 

    csv_wr.writeheader() 
    csv_wr.writerow({
        'name':'Code Improve',
        'email':'code@gmail.com'
    })  
    csv_wr.writerow({
        'name':'Code Improve2',
        'email':'code@gmail2.com'
    })  

or 

from csv import DictWriter

with open('books3.csv','w') as f:
    csv_wr = DictWriter(f,fieldnames= ['name','email']) 

    csv_wr.writeheader()  
    
    csv_wr.writerows([
        {
            'name':'Code Improve',
            'email':'code@gmail.com'
        },
        {
            'name':'Code Improve2',
            'email':'code@gmail2.com'
        }
    ])  
 
-------------------------------------------------------------
====================================================== 
++++++++++++++++++++++++++++++++++++++++++++++++ 
4:25 hr 

46) OS Module 
1) 
import os 

# print(os.getcwd())

# os.mkdir('test')   # again run give errror  
# print(os.path.exists('test'))   # check folder exist or not 
 
 
2) dir change & create dir 
os.chdir('/home/vishnu/Documents')
print(os.getcwd())
os.mkdir('test') 

3) list dir 
print(os.listdir())
os.chdir('/home/vishnu/Documents')
print(os.getcwd()) 
print(os.listdir())
or 
print(os.listdir('/home/vishnu/Documents'))

4) os.system 
os.chdir('/var/www/html/code/1/code-git')
print(os.getcwd())
os.system('git status')


5) get all file & folder name 

 
ft = os.walk('/home/vishnu/Documents/1')

for cp,fd_n,fi_n in ft:
    print(f'{cp}  {fd_n} {fi_n}')

6) shutil module (S H util) remove dir 
os.rmdir only remove empty dir 

#shutil.rmtree('/home/vishnu/Documents/2')    

# os.rmdir('/home/vishnu/Documents/2')  # give error is dir not empty 
os.rmdir('/home/vishnu/Documents/s')

7) copy file  
shutil.copy('home.py','/home/vishnu/Documents/22')  

8) copy folder 
shutil.copytree('/home/vishnu/Documents/1','/home/vishnu/Documents/22')    

9) move folder or file use move 
shutil.move('home.py','/home/vishnu/Documents/22')  


------------------------------------------------------------  

47) Debugger

l type 
n
c continue run 

import pdb 

pdb.set_trace()
name = 'code improve'
email = 'code@gmail.com'
empId = int('test')
code = 19900


48) mysql crud

pip install mysql-connector-python

if ImportError: No module named 'MySQL' 
then
pip3 install mysql-connector









00:00 Introduction & installation 
05:05 Escapes Sequences 
07:20 comment, arithmetic operation & variable 
16:15 user Input
24:12 string & String Methods
38:25 if condition & if else
46:41 while & for loop, break & continue  
52:00 function, global & local variable 
55:18 list 
1:12:50 tuple
1:22:15 dictinaries
1:42:52 sets 
1:49:20 list comprehension  
1:56:40 dictionary comprehension
2:02:10 *args  
2:07:00 **kwargs
2:11:30 Lambda function
2:15:34 Enumerate function
2:17:55 Map function
2:22:05 filter function
2:24:33 zip function 
2:30:05 All & Any  function 
2:32:56 max & min function 
2:39:17 sort function & doc 
2:45:12 decorators
3:05:14 class, object, instance & variable 
3:18:40 class decorator, static 
3:26:00 getter & setter , property 
3:32:09 single Inheritance
3:36:24 multi level Inheritance
3:46:50 multiple Inheritance
3:50:55 magic method or dunder method
3:56:02 errors type
4:01:40 raise error, try,expect & else 
4:08:43 read, write file & csv 
4:30:40 module, os, shutil & debugger

 
 
 


 


zero to hero python,
python full course playlist,
python zero to hero,
python full course,
python for beginners,
python in hindi,
python in hindi for beginners,
python in hindi full course,
python in hours,
python in 4 hr,
python in 4 hours,
python in 4 hours full course,
python in 4 hours youtube,
python crash course,
python crash course in hindi,
python crash course for beginners in hindi,
python crash course for beginners,
python tutorial in hindi,
complete python roadmap,
complete python in one video,
complete python course in hindi,
complete python class 12
