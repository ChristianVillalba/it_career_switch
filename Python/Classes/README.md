# Class

* A class is a template for a data type.     
* It describes the kinds of information that class will hold and how a programmer will interact with that data.     
* The `class` keyword define a class     
   ```python
   class NewClass:
      pass
   ```
   
### Instantiation
* A class must be instantiated
* We must create an instance of the class
   ```python
   cool_instance = CoolClass()
   ```
* A class instance is also called an **object**

### Object-Oriented Programming
* Represent the responsibilities of a program by **defining classes** and **creating objects** is known as **Object Oriented Programming (OOP)**.
* **Instantiation** takes a class and turns it into an object
* `type()` function takes an object and returns its class
   ```python
   print(type(cool_instance))
   # prints "<class '__main__.CoolClass'>"
   ```
   
 ### Class Variables
* A class variable is a variable that’s the same for every instance of the class
    * Useful when we want the same data to be available to every instance of a class
* define a class variable by including it in the indented part of your class definition
* Access to all of an object’s class variables with `object.variable` syntax:
   ```python
   class Musician:
  title = "Rockstar"
 
  drummer = Musician()
  print(drummer.title)
  # prints "Rockstar"
   ```
