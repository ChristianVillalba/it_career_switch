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



## PHP Fundamentals for Intermediate Web Developers

* **1 - Setting Up PHP**
    * Install PHP:
    Use XAMPP or MAMP for an easy local environment setup.
    Run PHP scripts through a local server (localhost).
    * Basic PHP Syntax:
    ```php  
    <?php
    echo "Hello, World!";
    ?>
    ```
    * PHP code is written between <?php and ?>.
    * Use echo to output content.
* **2 - Variables & Data Types**
    * Variables:
        ```php
        $name = "John";
        $age = 25;
        ```
        * Variables start with $.
        * No need to declare types; PHP is loosely typed.
    * Data Types:
        * String: $string = "Hello";
        * Integer: $number = 10;
        * Float: $price = 10.99;
        * Boolean: $isTrue = true;
        * Array: $fruits = array("apple", "banana", "orange");
* **3 - Basic Control Structures**
    * If-Else:
        ```php
        if ($age >= 18) {
            echo "Adult";
        } else {
            echo "Minor";
        }
        ```
    * Switch:
        ```php
        $day = "Monday";
        switch ($day) {
            case "Monday":
                echo "Start of the week!";
                break;
            // More cases...
            default:
                echo "Unknown day!";
        }
        ```
    * Loops:
        * For Loop:
        ```php
        for ($i = 0; $i < 10; $i++) {
            echo $i;
        }
        ```
        * While Loop:
        ```php
        $i = 0;
        while ($i < 10) {
            echo $i;
            $i++;
        }
        ```
* **4 - Functions**
    * Defining & Using Functions:
    ```php
    function greet($name) {
        return "Hello, " . $name;
    }
    echo greet("Alice");
    ```
    * Default Parameters:
    ```php
    function greet($name = "Guest") {
        return "Hello, " . $name;
    }
    echo greet(); // Outputs: Hello, Guest
    ```
* **5 - Working with Forms**
    * Handling Form Data:
    ```php
    // HTML Form Example:
    <form method="POST" action="process.php">
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>

    // PHP (process.php):
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        echo "Hello, " . $username;
    }
    ?>
    ```
    * Validation & Sanitization:
    ```php
    $username = htmlspecialchars($_POST['username']);
    if (!empty($username)) {
        // Process the form
    } else {
        echo "Username is required!";
    }
    ```
* **6. Rendering Dynamic Content**
    * Embedding PHP in HTML:
    ```php
    <h1><?php echo "Welcome, " . $username; ?></h1>
    ```
    * Looping through Arrays for Dynamic Content:
    ```php
    $fruits = ["Apple", "Banana", "Orange"];
    foreach ($fruits as $fruit) {
        echo "<li>" . $fruit . "</li>";
    }
    ```
* **7. Classes and Objects in PHP**
#### Introduction to OOP in PHP
* Classes:
    * A class is a blueprint for creating objects.
    * It defines properties (variables) and methods (functions) that objects created from the class can use.
* Defining a Class:
```php
class Car {
    // Properties
    public $make;
    public $model;
    
    // Constructor
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
    
    // Method
    public function getDetails() {
        return "Make: " . $this->make . ", Model: " . $this->model;
    }
}
```
* Creating Objects:
    * Objects are instances of a class.
    * Use the `new` keyword to create an object.
```php
$myCar = new Car("Toyota", "Corolla");
```
* Accessing Properties and Methods:
```php
echo $myCar->make; // Outputs: Toyota
echo $myCar->getDetails(); // Outputs: Make: Toyota, Model: Corolla
```
#### Key Concepts in PHP OOP
* Encapsulation:
    * Control access to the properties and methods of a class using visibility keywords.
    * ***Public:*** Accessible from anywhere.
    * ***Private:*** Accessible only within the class.
    * ***Protected:*** Accessible within the class and by inheriting classes.
```php
class Car {
    private $make;
    
    public function setMake($make) {
        $this->make = $make;
    }
    
    public function getMake() {
        return $this->make;
    }
}
```
* Inheritance:
    * A class can inherit properties and methods from another class.
    * Use the `extends` keyword.
    ```php
    class ElectricCar extends Car {
        public $batteryLife;
        
        public function setBatteryLife($batteryLife) {
            $this->batteryLife = $batteryLife;
        }
    }

    $tesla = new ElectricCar("Tesla", "Model S");
    $tesla->setBatteryLife("85 kWh");
    ```
* Constructors & Destructors:
    * Constructor: Automatically called when an object is created. Initialize properties.
    * Destructor: Automatically called when an object is destroyed. Clean up resources.
```php
class Car {
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
    
    public function __destruct() {
        echo "Destroying " . $this->make . " " . $this->model;
    }
}
```
* **8 - Crucial PHP Functionalities**
    * Connecting to a Database:
    ```php
    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ```
    * Basic CRUD Operations:
    * Create:
    ```php
    $sql = "INSERT INTO users (name, email) VALUES ('John', 'john@example.com')";
    $conn->query($sql);
    ```
    * Read:
    ```php
    $result = $conn->query("SELECT * FROM users");
    while($row = $result->fetch_assoc()) {
        echo $row['name'];
    }
    ```
    * Update:
    ```php
    $sql = "UPDATE users SET email='newemail@example.com' WHERE id=1";
    $conn->query($sql);
    ```
    * Delete:
    ``` php
    $sql = "DELETE FROM users WHERE id=1";
    $conn->query($sql);
    ```
* **9 - Introduction to AJAX with PHP**
    * AJAX Call in JavaScript:
    ```javascript
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("response").innerHTML = xhr.responseText;
        }
    };
    xhr.send("name=John");
    ```
    * Processing AJAX Request in PHP:
    ```php
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        echo "Hello, " . $name;
    }
    ?>
    ```

## AJAX Fundamentals for Intermediate Web Developers
1. What is AJAX?
Definition:
AJAX (Asynchronous JavaScript and XML) is a technique that allows web pages to update asynchronously by exchanging small amounts of data with the server behind the scenes.
Enables web applications to send and receive data without reloading the entire page.
Core Technologies:
JavaScript: For creating AJAX requests.
XMLHttpRequest (XHR): The object used to interact with servers.
JSON: Commonly used data format in AJAX instead of XML.
2. Basic Structure of an AJAX Request
Steps to Perform an AJAX Call:

Create an XMLHttpRequest object.
Define a callback function to handle the server's response.
Open a connection to the server.
Send the request to the server.
Basic Syntax Example:

javascript
Copy code
// 1. Create an XMLHttpRequest object
var xhr = new XMLHttpRequest();

// 2. Define a callback function
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        // 5. Handle the response
        document.getElementById("result").innerHTML = xhr.responseText;
    }
};

// 3. Open a connection
xhr.open("GET", "server-script.php", true);

// 4. Send the request
xhr.send();
3. Handling Responses
Response Types:

Text: xhr.responseText - Returns the response as a string.
XML: xhr.responseXML - Returns the response as an XML document.
Example: Handling JSON Response

javascript
Copy code
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var data = JSON.parse(xhr.responseText);
        document.getElementById("result").innerHTML = data.message;
    }
};
4. Common AJAX Methods
GET vs POST:

GET:
Used for requesting data from a server.
Data is appended to the URL.
Limited data size.
POST:
Used for sending data to the server (e.g., form submissions).
Data is sent in the request body.
Can handle larger amounts of data.
Example: GET Request

javascript
Copy code
xhr.open("GET", "server-script.php?name=John", true);
xhr.send();
Example: POST Request

javascript
Copy code
xhr.open("POST", "server-script.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("name=John&age=30");
5. AJAX with JSON
Sending JSON Data:

javascript
Copy code
var xhr = new XMLHttpRequest();
xhr.open("POST", "server-script.php", true);
xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

var data = JSON.stringify({ name: "John", age: 30 });
xhr.send(data);
Handling JSON on the Server (PHP Example):

php
Copy code
<?php
$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$age = $data['age'];

echo json_encode(["message" => "Hello, $name. You are $age years old."]);
?>
6. AJAX Error Handling
Handling Errors:

javascript
Copy code
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        } else {
            document.getElementById("result").innerHTML = "Error: " + xhr.status;
        }
    }
};
Timeouts:

javascript
Copy code
xhr.timeout = 5000; // Set timeout to 5 seconds
xhr.ontimeout = function() {
    alert("The request timed out.");
};
7. Using AJAX with jQuery
Simplifying AJAX Calls with jQuery:

jQuery provides easy-to-use methods for AJAX, such as $.ajax(), $.get(), and $.post().
Example: GET Request with jQuery

javascript
Copy code
$.get("server-script.php", { name: "John" }, function(data) {
    $("#result").html(data);
});
Example: POST Request with jQuery

javascript
Copy code
$.post("server-script.php", { name: "John", age: 30 }, function(data) {
    $("#result").html(data);
});
Handling JSON Responses with jQuery

javascript
Copy code
$.post("server-script.php", { name: "John" }, function(data) {
    var response = JSON.parse(data);
    $("#result").html(response.message);
});