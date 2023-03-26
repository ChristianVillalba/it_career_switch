# PHP

## INTRODUCTION TO PHP

PHP is designed to interact with HTML to generate dynamic websites.
*  `<?php` and `?>` tags:  Embedding PHP in HTML
* Every statement in PHP must be terminated with a semicolon `;`
* PHP files have a **.php** extension.
    * The file always starts with the opening PHP tag `<?php`.
    * The closing tag is implied and left out by convention.
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
* Variables are a fundamental programming concept which allow us to easily reuse data in our code.
    * We declare a variable using the dollar sign `$` followed by the variable name and then use the assignment operator `=` to give it a value.
    `$myVariable = ___`
* PHP has **variable parsing** which allows us to include variables directly in our strings.
* Once a variable has been assigned, we can change its value. This is called **reassignment**.
* We can create an **alias for a variable**, instead of just a copy, using the reference assignment operator `=&`.
* Operations to the right of the assignment operator will be evaluated before assignment takes place.
* The concatenating assignment operator `.=` is a shorthand notation for reassigning a string variable to its current value appended with another string value.
