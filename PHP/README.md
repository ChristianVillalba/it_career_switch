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
    * Exponentiation	`**	echo 8**2;` // Prints: 64
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