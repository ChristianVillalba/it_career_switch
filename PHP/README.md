# PHP

## INTRODUCTION TO PHP

PHP is designed to interact with HTML to generate dynamic websites.
*  `<?php` and `?>` tags:  Embedding PHP in HTML
* Every statement in PHP must be terminated with a semicolon `;`
* PHP files have a **.php** extension.
    * The file always starts with the opening PHP tag `<?php`.
    * The closing tag `?>` is implied and left out by convention.
* Every statement in PHP must be terminated with a semicolon `;`
*  Whitespace is generally ignored when executing PHP code.
*  Keywords are not case sensitive in PHP. As a convention, use the standard casing.
* Comments in PHP:
    * Single line comments are made using `#` or `//`
    * Multi-line comments are placed between `/*` and `*/`

## PHP STRINGS AND VARIABLES

* Strings are collections of text that the computer treats as a single piece of data.
    * A string can be any length and contain any letters, numbers, symbols, or spaces surrounded by quotation marks.
    * In order to include certain characters inside strings we have to use escape sequences `\`.
* An operator is a character that performs a task in our code.
    * We can use the concatenation operator `.` to combine two strings into one.
* Variables allow us to easily reuse data in our code.
    * We declare a variable using the dollar sign `$` followed by the variable name and then use the assignment operator `=` to give it a value:
    * `$myVariable = ___`
* PHP has **variable parsing**: includes variables directly in our strings.
* **Reassignment**: Once a variable has been assigned, we can change its value. .
* We can create an **alias for a variable**, instead of just a copy, using the reference assignment operator `=&`.
* Operations to the right of the assignment operator will be evaluated before assignment takes place.
* The concatenating assignment operator `.=` is a shorthand notation for reassigning a string variable to its current value appended with another string value.

## PHP NUMBERS
* PHP has two number data types: integers and floating point numbers
* We can use arithmetic operators for performing math operations:
    * Addition	+	`echo 1 + 4.5;` // Prints: 5.5
    * Subtraction	-	`echo 9 - 1;` // Prints: 8
    * Multiplication	*	`echo -1.9 * 2.9;` // Prints: -5.51
    * Division	/	`echo 9 / 1;` // Prints: 9
    * Modulo	%	`echo 11 % 3;` // Prints: 2
    * Exponentiation	**	`echo 8**2;` // Prints: 64
* We can assign number values to variables and then perform numerical operations with them
* We can use mathematical assignment operators as a shorthand when reassigning number variables:
    * Add	`$x = $x + $y` ⮕ `$x += $y`
    * Subtract	`$x = $x - $y` ⮕ `$x -= $y`
    * Multiply	`$x = $x * $y` ⮕ `$x *= $y`
    * Divide	`$x = $x / $y` ⮕ `$x /= $y`
    * Mod	`$x = $x % $y` ⮕ `$x %= $y`

## PHP FUNCTIONS

* We can think of programs as series of instructions to be performed by the computer. 
* A function is a set of instructions we package as a unit, often with a name, so that we can reuse it.
<br />

* Defining Functions
    * ```php
        <?php
        function greetLearner()
        {
        echo "Hello, Learner! \n";
        echo "I hope you're enjoying PHP! \n";
        }
        ```
* Invoking functions
    * ```php
        <!-- ... -->
        greetLearner()
        greetLearner()
        ```

* Introduction to Functions
    * We can package a set of instructions within a named function to **reuse** whenever we’d like.
        * **Functions** can be defined with **parameters** wich are used as **variables**.
        * When Functions are invoked, the **values** given to these **parameters** are called **arguments**. 
    * When we invoke a function, the computer will execute the function body, specified by the code block following the parameters list.
    * Functions can return a value by using the return keyword otherwise they return NULL which means no value.
    * We can store the return value of a function in a variable or use it any other way we’d use a value.
    * We can define functions with parameters which are variables we can refer to throughout our function’s body.
    * When invoking functions, the values that we give them are called arguments.
    * Functions can have multiple parameters.
    * The order in which the arguments are passed in decides which parameters they correspond to.
    * You can make an argument optional by providing its corresponding parameter with a default value.
    * If you prepend a parameter with the reference sign (&) that argument will be passed by reference.
    * Variables within functions have local scope and can not be accessed from outside the function.
    * Use the `global` keyword to use variables from the global scope within a function.
* Build-In PHP Functions
    *  built-in functions are functions provided by PHP
    *  built-in functions often don’t follow the function naming conventions

## PHP & HTML

* Introduction to use PHP to generate HTML. 
    * This will become even more powerful as we learn how to get **information from the client** and use that to **create dynamic websites**
* The front-end of a website consists of JavaScript, CSS, HTML, images, and other static assets sent to the client.
* **The browser** is the **client**
    * It sends a request to the back-end for all the assets needed to view and interact with the website.
* The back-end consists of a web server and all the logic and data needed to create and maintain a website or web application.
* **PHP** is a **back-end language**.
* **PHP** can be used to **generate HTML files**.
* We **embed PHP scripts** within HTML by inserting PHP code between the opening `<?php` and closing `?>` tags.

### PHP shorthand

* The PHP shorthand for loops uses a colon `:`  to open the code block.
    * Instead of a bracket `{`
* The shorthand uses keywords to close the code block instead of a bracket `}`:
    * Use `endfor` to close a for loop
    * Use `endforeach` to close a foreach loop
    * Use `endwhile` to close a while loop
* The closing keyword needs to be followed by a semicolon `:`.
* Make sure to re-enter PHP mode using `<?php` or the echo shorthand `<?=` b**efore using PHP variables** in the loop
* Check: *Loops in Html > reviewLesson.php*
* Check: *Cafe Menu > index.php*

### HTML FORM HANDLING IN PHP

* **Superglobals** are automatic global variables which are **available in all scopes** throughout a script.
* Request Superglobals
    * PHP has functionality to ease processing of HTML requests. 
* The list of superglobals in PHP 
    * $GLOBALS
    * $_SERVER
    * $_GET
    * $_POST
    * $_FILES
    * $_COOKIE
    * $_SESSION
    * $_REQUEST
    * $_ENV
* `$_GET` - this contains an associative array of variables passed to the current script using **query parameters** in the **URL**
* `$_POST` - this contains an associative array of variables passed to the current script using **a form submitted** using the **“POST” method**
* `$_REQUEST` - this contains the contents of `$_GET`, `$_POST`, and `$_COOKIE`