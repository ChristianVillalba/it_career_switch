# JavaScrip
______

## Introduction to JS

* Data is printed, or logged, to the console, with `console.log()`
* Comments in JS
    * Single-line `//`
    * Multi-line comments between `/*` & `*/`
* There are 7 fundamental **data types** in JavaScript: 
    * Strings 
    * Numbers 
    * Booleans 
    * Null 
    * Undefined 
    * Symbol 
    * Object
* The built-in arithmetic operators include `+`, `-`, `*`, `/`, and `%` (returns reminder in a division)
* **Objects**, including instances of data types, can have **properties**: stored information
    * The properties are denoted with a `.` after the *name of the object*
    * eg: `"Hello".length`
* **Objects**, including instances of data types, can have **methods**: perform actions
    * Methods are called by appending the object or instance with `.`, the *method name* & `()`
    * `'hello'.toUpperCase()`
* **Built-in objects**, including `Math`, are collections of **methods and properties** that JS provides

## Variables

* *ariables hold reusable data in a program and associate it with a name.
* Variables are stored in memory.
* The `var` keyword is used in pre-ES6 versions of JS.
* `let` is the preferred way to declare a variable when it **can be reassigned**
* `const` is the preferred way to declare a variable with a **constant value**
* Variables that have not been initialized store the primitive data type **undefined**.
* Mathematical assignment operators make it easy to calculate a new value and assign it to the same variable.
* The `+` operator is used to **concatenate strings** including string values held in variables.
* **Template literals** (In ES6) use backticks \` and `${}` to interpolate values into a string.
* The `typeof` keyword returns the data type (as a string) of a value.

## Conditional Statements

* An `if` statement checks a condition and will execute a task if that condition evaluates to **true**
* `if`...`else` statements make binary decisions and execute different code blocks based on a provided condition.
* `else if` statements: to add more conditions using 
* **Comparison operators**, including `<`, `>`, `<=`, `>=`, `===`, and `!==` can compare two values.
* The logical and operator, `&&` or `and`, checks if **both** expressions are **truthy**.
* The logical operator `||`, or `or`, checks if **either** expression is **truthy**.
* The bang operator, `!`, switches the truthiness and falsiness of a value.
* The **ternary operator** is shorthand to **simplify** concise `if...else` statements.
* A **Switch statement** can be used to simplify the process of writing multiple else if statements. 
    * The `break` keyword stops the remaining cases from being checked and executed in a switch statement

## Functions

* A function is a **reusable block of code** that groups together a sequence of statements to **perform a specific task**
```javascript
function funName (Param1, Param2) {
    code to be executed;
}
```
* **A Parameter** allow a function to accept data.
* A parameter is a named variable inside a function’s block which will be assigned the value of the argument passed in when the function is invoked:
```javascript
function helloName (name , surname) {
    console.log("Hello, + name + " " + surname );
}
helloName(Christian, Villalba)
// Hello, Christian Villalba
```
* Calling the function:
```javascript
funName() // We are calling (executing) our function
funName // It returns the function we wrote
```
* ES6 introduces new ways of handling arbitrary parameters through default parameters
```javascript
function funName( myDefaultValue = "Default") {
    ...
}
```
* **Return statement**: to return a value from a function
* Define a function using function expressions:
    * ```javascript
        const calculateArea = function (width, height) {
            const area = width * height;
            return area 
        }
        ```
* Arrow Functions
    * ```javascript
        const calculateArea = (width, height) => {
            let area = width * height;
            return area 
        }
        ```
* Single Line Arrow Function (refractored / concise body)
    * ```javascript
        const calculateArea = (width, height) => width * height;
        ``` 
## Scope

* It refers to where variables can be accessed,  and is determined by 
    * where  they are declared
    * how they are declared
* **Blocks** are statements that exist within curly braces `{}`.
* **Global scope** refers to the context within which variables are accessible to every part of the program.
* **Global variables** are variables that exist within global scope.
* **Block scope** refers to the context within which variables are accessible only within the block they are defined.
* **Local variables** are variables that exist within block scope
* **Global namespace** is the space in our code that contains globally scoped information
* **Scope pollution** is when too many variables exist in a namespace or variable names are reused

## Arrays

* Arrays are **lists** that store data in JavaScript.
* Arrays are created with brackets `[]`.
* Each item of an array is at a numbered position, **index**, starting at 0.
* We can access one item in an array using its index, with syntax like: `myArray[0]`
* We can also change an item in an array using its index, with syntax like `myArray[0] = 'new string';`
* Arrays have a length property: how many items are in an array.
* Arrays have their own methods
    * Eg: `.push()` and `.pop()`, which add and remove items from an array.
    * `.slice()` returns a shallow copy of a portion of an array into a new array object     
    The original array will not be modified 
    * `.shift()` removes the first element from an array and returns it.       
    It changes length of the array.
    * You can find documentation at the MDN website.
    * Some built-in methods are mutating, meaning the method will change the array, while others are not mutating. You can always check the documentation.
* Variables that contain arrays can be declared with `let` or `const`. 
    * **Arrays** declared  with `const`,  are still mutable. 
    * However, a **variable** declared with `const` cannot be reassigned.
* Arrays mutated inside of a function will keep that change even outside the function.
* Arrays can be nested inside other arrays.
* To access elements in nested arrays chain indices using bracket notation

## Loops

* Loops perform repetitive actions so we don’t have to code that process manually every time.
    * Loops automatically iterate a block of code based on coditions.
* `for` loops are appropriate when loopin a predeterminated number of times.
* A **nested for loop** is a loop inside another loop.
    * They allow us to run multiple for loops at once.
* `while` loops evaluate a condition as long is true, and stopping when the condition if false.
    * while loops allow for different types of stopping conditions
* `do ... while` statement to run a code block at least once. 
    * Then loop as long as a condition remains true
* **Stopping conditions** are crucial for avoiding infinite loops.
* do...while loops run code at least once— only checking the stopping condition after the first execution
* The `break` keyword allows programs to leave a loop during the execution of its block

## Objects

* **Objects** store unordered collections of **key-value pairs**.
* Each `key: value` pair is a **property**. 
    * When a **property** is a **function** it is known as a **method**.
* An **object literal** is composed of comma-separated key-value pairs surrounded by curly braces.
    *   ```javascript
        let myObj = {
            key1 : value1,
            key2 : value2,
        }
        ```
* You can access, add or edit a property within an object by using dot notation `.` or bracket notation`[]`.
* We can **add methods** to our object literals using key-value syntax with anonymous function expressions as values or by using the new ES6 method syntax.
    * `myObj["newKeyProperty"] = "newValue"`
* We can copy all of the properties of an object into a new object
    * `Object.assing()`
* We can navigate complex, nested objects by chaining operators.
* Objects are **mutable**. 
    * We can change their properties even when they’re declared with const.
* Objects are passed by reference.
    * When we make changes to an object passed into a function, those **changes are permanent**.
* We can iterate through objects using the `for...in` syntax.
<br>

* Calling object: the object that a method belongs to is called the 
* The `this` keyword refers to the calling object and can be used to access properties of the calling object
* Methods do not automatically have access to other internal properties of the calling object.
* The value of `this` depends on where the `this` is being accessed from.
* We **canNOT** use **arrow functions** as **methods** if we want to access other internal properties.
* JavaScript objects do not have built-in privacy.
    * Rather there are conventions to notify other developers about the intent of the code.
* The usage of an **underscore** before a property name means that the original developer did    
 **NOT** intend for that property to be **changed**.
* Setters and getter methods allow for more detailed ways of accessing and assigning properties.
* **Factory functions** A function that returns an Object
    * Allow us to create object instances quickly and repeatedly.
* There are different ways to use object destructuring: 
    * The property value shorthand 
    * Destructured assignment.
* Check Object Documentation for more info.

## Higher-Order Functions

* **Abstraction** allows us to write complicated code in a way that’s easy to reuse, debug, and understand for human readers.
* We can work with **functions** the same way we work with **any other type of data** 
    * Including reassigning them to new variables.
* JavaScript functions are **first-class objects**
    * They have **properties and methods** like any other object.
* **Functions** can be **passed into other functions** as parameters.
* A **higher-order function** is a function that either accepts functions as parameters, returns a function, or both.
    * **Callback Function** The returned function or the function accepted as parameter

## Iterators

* All iterator methods take a **callback function**
    * It can be a pre-defined function, a function expression, or an arrow function.
* You can visit the Mozilla Developer Network to learn more about iterator methods (and all other parts of JavaScript!).
* `.forEach()` is used to execute the same code on every element in an array but does not change the array and returns undefined.
* `.map()` executes the same code on every element in an array and returns a new array with the updated elements.
* `.filter()` checks every element in an array to see if it meets certain criteria and returns a new array with the elements that return truthy for the criteria.
* `.findIndex()` returns the index of the first element of an array that satisfies a condition in the callback function. It returns -1 if none of the elements in the array satisfies the condition.
* `.reduce()` iterates through an array and takes the values of the elements and returns a single value.