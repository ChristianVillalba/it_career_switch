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

* Introduction to Functions:
    * We can package a set of instructions within a named function to **reuse** whenever we’d like.
        * **Functions** can be defined with **parameters** wich are used as **variables**.
        * When Functions are invoked, the **values** given to these **parameters** are called **arguments**. 
    * When we invoke a function:
        * the computer will execute the function body, specified by the code block following the parameters list.
    * `return` keyword: return a value
        * NULL means no value
        * We can **store** the returned value as **variable** or **use** it as **value**.
    * Define functions with **parameters** -variables we can refer to
        * Functions can have multiple parameters.
    * When invoking functions: given **values** are called **arguments**.
    * The order defines which parameters they correspond to.
    * You can make an argument optional by providing a **default value**.
    * `&` : that argument will be passed by reference.
    * Variables within functions have **local scope**
        * Can not be accessed from outside the function.
    * Use the `global` keyword to use variables from the global scope within a function.
* Build-In PHP Functions
    * Functions provided by PHP
    * (often) Don’t follow the function naming conventions

## PHP & HTML
* Extremely powerful when using **information from the client** to create **dynamic websites**
* **The front-end** 
    * consists of JS, CSS, HTML, and static assets sent to the client.
    * **The browser** is the **client**
    * It sends a request to the back-end for all the assets needed (to view and interact with the website).
* **The back-end:** 
    * a web server and the logic and the data needed to create and maintain a website or web app.
* **PHP** 
    * is a **back-end language**.
    * can be used to **generate HTML files**.
    * `<?php` and `?>` to **embed PHP scripts** within HTML

### PHP shorthand

* The PHP shorthand for loops uses a colon `:`  to open the code block.
    * Instead of a bracket `{`
* The shorthand uses keywords to close the code block instead of a bracket `}`:
    * Use `endfor` to close a for loop
    * Use `endforeach` to close a foreach loop
    * Use `endwhile` to close a while loop
* The closing keyword needs to be followed by a semicolon `:`.
* Make sure to re-enter PHP mode using `<?php` or the echo shorthand `<?=` before using PHP variables in the loop
* Check: *Loops in Html > reviewLesson.php*
* Check: *Cafe Menu > index.php*

### HTML FORM HANDLING IN PHP

* **Superglobals** are automatic global variables **available in all scopes**.
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
* `<?=` is shorthand for `<?php` echo.
* The array keys in the PHP request superglobals are set by the `name` attributes in the HTML form, which need to be unique.
* The `action` attribute is used to specify which file should handle data from the form request.
* Check: *HtmlForms > ReviewExercise*

### Regular expressions

* **Regular expressions** are special sequences of characters that describe a pattern of text that is to be matched
* **Literals** to match the exact characters that we desire
* **Alternation**, using the pipe symbol `|`, allows us to match the text preceding or following the `|`
* **Character sets** `[]`, let us match one character from a series of characters
* **Wildcards**`.`, will match any single character (letter, number, symbol or whitespace)
* **Ranges** allow us to specify a range of characters in which we can make a match
* **Shorthand character classes** like: 
    * `\w` word characters
    * `\d` digit characters
    * `\s` whitespace characters
* **Groupings** `()`, group parts of a regular expression together, and 
    * allows us to limit alternation to part of a regex
* **Fixed quantifiers** `{}`, let us indicate the exact quantity or a range of quantity of a character we wish to match
* **Optional quantifiers** `?`, allow us to indicate a character in a regex is optional, or can appear either 0 times or 1 time
* **The Kleene star** `*`, is a quantifier that matches the preceding character 0 or more times
* **The Kleene plus** `+`, matches the preceding character 1 or more times
* **The anchor symbols** hat `^` and dollar sign `$` are used to match text at the start and end of a string, respectively

### INTRODUCTION TO PHP FORM VALIDATION

* **Sanitize the data** Transform it into a safe and standardized format.
* We can use the built-in PHP 
    * `trim()` 
        * function to remove any whitespace
    * `htmlspecialchars()` 
        * Transforms HTML elements into HTML entities (characters that represent HTML elements but won’t display as HTML), 
        * The PHP interpreter doesn’t recognize them as HTML. 
        * This prevents, for example, a man-in-the-middle attack in which malicious HTML is injected into a user’s  view of our site.
    * `filter_var()` 
        * The most powerful PHP function for sanitizing data
        * This function operates on a variable and passes it through a “filter” that produces the desired outcome.
        * As its first argument, filter_var() takes a variable. As its second, it takes an ID representing the type of filtering that should be performed.
        * [PHP Sanitize filters Documentation](https://www.php.net/manual/en/filter.filters.sanitize)
        * eg: `FILTER_SANITIZE_EMAIL`  
        * It filtered out any characters not allowed in emails. Once sanitized, we can safely display user inputs.
        * We can use `filter_var()` to validate as well as sanitize
            * Check: *basicValidation > index.php*
        * `filter_var()` accepts an optional third argument , often called `$options`, that allows us to fine-tune the operation of a given filter. 
            * Check: *HtmlForms Php > OptionsInValidation > index.php*
    * **Regex**
        * A very common method for **validating data** is to **compare** the input to a pattern we define with a **regular expression**
        * Check: *HtmlForms Php > CustomValidation > index.php*
* Validating Against Back-end Data 
    * Modern websites and web applications need to store a lot of data, they usually interact with databases on the back-end.
    * An important application of this kind of validation is handling the creation of a user’s account
    * Check: *HtmlForms Php > ValidationWithDatabase > index.php*
* Sanitizing for Back-end Storage
    * We always need to sanitize all data before storing it in our own databases.
    * `preg_replace()` to sanitize data formatting (built-in func)
* **Rerouting**
    * the user has submitted a valid form
        * `header()` function performs redirects
        * Argument: str `"Location: url"`
        *  `exit` to terminate the current script
    * ```php
        if (/* Is the submission data validated? */) {
        header("Location: https://www.best-puppy-pix.com/");
        exit;
        }
        ```

### CLASSES AND OBJECTS

* **Classes** are defined using the `class` keyword.
* within a class:
    * **Functions** become **methods** 
    * **Variables** are **properties**.
* There are three levels of visibility for class members:
    * `public` (default) - accessible from outside of the class
    * `protected` - only accessible within the class or its descendants
    * `private` - only accessible within the defining class
* Members can be defined to be `static`.
* Static members are accessed using the Scope Resolution Operator `::`.
* Classes are instantiated into objects using the `new` keyword.
* Members of an object are accessed using the Object Operator `->`.