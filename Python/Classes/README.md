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
  
### Methods
* Methods are functions that are defined as part of a class
* The first argument in a method is always the object that is calling the method
      * Convention recommends to name this first argument `self`
      * Methods always have at least this one argument
* We define methods similarly to functions, except that they are indented to be **part of the class**
* Methods with **Arguments**
     * Methods can also take more arguments than just `self`
   ```python
   class DistanceConverter:
     kms_in_a_mile = 1.609
     def how_many_kms(self, miles):
       return miles * self.kms_in_a_mile

   converter = DistanceConverter()
   kms_in_5_miles = converter.how_many_kms(5)
   print(kms_in_5_miles)
   # prints "8.045"
   ```
   
### Constructors
* There are several methods that we can define in a Python class that have special behavior.
   * They have two underscores `__` on either side of them
* Methods that are used to prepare an object being instantiated are called **constructors**
   * “constructor” is used to describe similar features in other OOP languages
   * Programmers who refer to a constructor in Python are talking about `__init__()` method
* `__init__()`
   *  It initializes a newly created object
   *  It is called every time the class is instantiated
     * Methods can also take more arguments than just `self`
   ```python
   class NameOfClass():
      def __init__(self, param1, param2):
         self.param1 = param1
         self.param2 = param2
      def some_method(self):
         print(self.param1)
   ```
   
 ### Instance Variables
 * A **Class** is a schematic for a data type
 * An **Object** is an **instance of a class**
 * Each instance of a class (Object) can hold **different kinds of data**
 * The **data held by an object** is referred to as an **Instance Variable**
 * **Instance variables** are **specific to the object** they are attached to.
   ```python
   class Store:
     pass

   alternative_rocks = Store()
   isabelles_ices = Store()

   alternative_rocks.store_name = "Alternative Rocks"
   isabelles_ices.store_name = "Isabelle's Ices"
   ```
  
### Attribute Functions
* Instance variables and class variables are both accessed similarly in Python
* **AttributeError** when attempt to access an **attribute** that is **not** class var or inst var
* `hasattr()` 
   * Checks if an object has an attribute or not 
   * Returns Bolean Value
   * `hasattr(object, “attribute”)`
      *  object : the object we are testing to see if it has a certain attribute
      *  attribute : name of attribute we want to see if it exists
*  `getattr()` 
   * Returns the actual value  
   * `getattr(object, “attribute”, default)`
