# Review: Media Queries
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

## CONDITIONAL STATEMENTS

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
* Single Line Arrwo Function (refractored)
    * ```javascript
        const calculateArea = (width, height) => width * height;
        ``` 
    