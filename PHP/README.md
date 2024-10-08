# PHP

## Introduction to PHP

* **1 - Introduction to PHP**
    * Purpose:      
        PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.
    * Basic Syntax:
        * PHP Tags: PHP code is embedded in HTML using <?php and ?>.
        * File Extension: PHP files have a .php extension.
        * Statements: Each statement ends with a semicolon ;.
        * Comments:
            * Single-line: // or #
            * Multi-line: /* comment */
        * Case Sensitivity:
        * Keywords are not case-sensitive (e.g., echo vs. Echo), but variables are case-sensitive.
        * Whitespace: Ignored between code elements.
    ```php
    <?php
    echo "Hello, World!";
    ?>
    ```        
    * Data Types:
        * String: $string = "Hello";
        * Integer: $number = 10;
        * Float: $price = 10.99;
        * Boolean: $isTrue = true;
        * Array: $fruits = array("apple", "banana", "orange");
        * ***Note:*** No need to declare types; PHP is loosely typed.
* **2 - PHP Strings and Variables**
    * Strings:
        * Text enclosed in quotes.
        * Can include special characters using escape sequences (\).
        * Concatenation: Combine strings with . operator.
    ```php
    $greeting = "Hello, " . "World!";
    ```
    * Variables:
        * Defined using $ followed by the variable name.
        * Variables can store strings, numbers, arrays, objects, etc.
    ```php
    $name = "John";
    ```
    * Variable Parsing:
        * Variables inside double-quoted strings are automatically parsed.
    ```php
    $message = "Hello, $name!";
    ```
    * Variable Reassignment:
        * Reassign with new values using = operator.
        * Reference assignment uses =&.
    ```php
    $alias = &$name;
    ```
* **3 -  PHP Numbers**
    * Data Types:
        * Integers: Whole numbers.
        * Floating-Point Numbers: Numbers with decimal points.
    * Arithmetic Operators:
        * Addition: +
        * Subtraction: -
        * Multiplication: *
        * Division: /
        * Modulus: %
        * Exponentiation: **
        * Example:
    ```php
    $sum = 10 + 5;
    $product = 2 * 3;
    ```
    * Mathematical Assignment Operators:
        * +=, -=, *=, /=, %=
    ```php
    $x = 10;
    $x += 5; // $x is now 15
    ```
* **4 - PHP Functions**
    * Functions: package reusable code blocks.    
    * Syntax:
    ```php
    function functionName() {
        // Code to execute
    }
    ```
    * Invoking Functions:
    ```php
    function greet() {
        echo "Hello!";
    }
    greet(); // Calls the function
    ```
    * Parameters and Arguments:
    Functions can accept **parameters**, variables used within the function.
    ```php
    function greet($name) {
        return "Hello, $name!";
    }
    echo greet("John"); // Output: Hello, John!
    Return Values:
    ```
    * Default Parameters:
    ```php
    function greet($name = "Guest") {
        return "Hello, " . $name;
    }
    echo greet(); // Outputs: Hello, Guest
    ```
    * Use `return` to send a value back from a function.
    Example:
    ```php
    function add($a, $b) {
        return $a + $b;
    }
    $result = add(3, 4); // $result is 7
    ```
    * Scope:
        * **Local Scope:** Variables defined within a function.
        * **Global Scope:** Variables accessible throughout the script.
        * Use `global` keyword to access global variables inside a function.
* **5 - PHP and HTML Integration**
    * Embedding PHP in HTML:
        * PHP can be used to dynamically generate HTML content.
        ```php
        <h1><?php echo "Welcome, $name!"; ?></h1>
        ```
    * Shorthand PHP Syntax:
        * Use <?= as shorthand for <?php echo.
        ```php
        <h1><?= "Welcome, $name!"; ?></h1>
        ```
    * HTML Form Handling:
        * Data is handled using PHP superglobals: `$_GET`, `$_POST`, `$_REQUEST`.
        ```php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            echo "Hello, $username!";
        }
        ```
* **6 - PHP Classes and Objects**
    * **Defining classes:**
        * Classes are blueprints for creating objects.
        * within a class:
            * **Functions** become **methods** 
            * **Variables** are **properties**.
        * Syntax:
        ```php
        class MyClass {
            public $property;
            public function myMethod() {
                // Code
            }
        }
        ```
    * **Creating Objects:**
        * Instantiate a class using the `new` keyword.
        ```php
        $object = new MyClass();
        ```
        * Use `->` to access properties and methods.
        ```php
        $object->property = "Value";
        $object->myMethod();
        ```
    * Visibility:
        * ***Public:*** (default) Accessible from outside the class.
        * ***Private:*** Accessible only within the class.
        * ***Protected:*** Accessible within the class and subclasses.
    * Static Members:
        * Access using `::` operator.
        ```php
        class MyClass {
            public static $staticProperty = "Value";
            public static function staticMethod() {
                // Code
            }
        }
        echo MyClass::$staticProperty;
        MyClass::staticMethod();
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
* **7 - Superglobals** 
    * Automatic global variables **available in all scopes**.
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
    * The array keys in the PHP request superglobals are set by the `name` attributes in the HTML form, which need to be unique.
    * The `action` attribute is used to specify which file should handle data from the form request.
    * Check: *HtmlForms > ReviewExercise*

-----

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

-----

## PHP Fundamentals for Intermediate Web Developers

* **1 - Setting Up PHP**
    * Install PHP:
        * Use XAMPP or MAMP for an easy local environment setup.
        * Run PHP scripts through a local server (localhost).
    * PHP code is written between `<?php` and `?>`.
    * Use echo to output content.
    * Basic PHP Syntax:
    ```php  
    <?php
    echo "Hello, World!";
    ?>
    ```
    * Use `<?=` as shorthand for `<?php echo`.
* **2 - Basic Control Structures**
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
* **3 - Rendering Dynamic Content**
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
* **4 - Working with Forms**
    * Handling Form Data:
    ```html
    // HTML Form Example:
    <form method="POST" action="process.php">
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
    ```
    ```php
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
* **5 - Introduction to PHP Form Validation**
    * **Sanitize the data:** Transform it into a safe and standardized format.
    * Built-in PHP Sanitization:
        * `trim()` 
            * function to remove any whitespace
        * `htmlspecialchars()` 
            * Transforms HTML elements into HTML entities (characters that represent HTML elements but won’t display as HTML), 
            * The PHP interpreter doesn’t recognize them as HTML. 
            * This prevents, for example, a man-in-the-middle attack in which malicious HTML is injected into a user’s  view of our site.
        * `filter_var()` 
            * The most powerful PHP function for sanitizing data
            * It filters a single variable using a specified filter: 
                * As its first argument, it takes a variable. 
                * As its second, it takes an ID representing the type of filtering.
                * ... `filter_var($email, FILTER_VALIDATE_EMAIL)` ...
                * [PHP Sanitize filters Documentation](https://www.php.net/manual/en/filter.filters.sanitize) 
                * It filtered out any characters not allowed in emails. Once sanitized, we can safely display user inputs.
            * We can use `filter_var()` to validate as well as sanitize
                * Check: *basicValidation > index.php*
            * `filter_var()` accepts an optional third argument , often called `$options`, that allows us to fine-tune the operation of a given filter. 
                * Check: *HtmlForms Php > OptionsInValidation > index.php*
        * ***Regular expressions***
            * A very common method for **validating data** is to **compare** the input to a **Regex**
            * Check: *HtmlForms Php > CustomValidation > index.php*
    * **Validating Against Back-end Data** 
        * Modern websites and web applications need to store a lot of data, they usually interact with databases on the back-end.
            * eg: An important application of this kind of validation is handling the creation of a user’s account
            * Check: *HtmlForms Php > ValidationWithDatabase > index.php*
        * **Sanitizing for Back-end Storage**
        * `preg_replace()` to sanitize data formatting (built-in func)
        * We always need to sanitize all data before storing it in our own databases.
    * **Rerouting**
        * The user has submitted a valid input
        * `header()` function performs redirects. Argument: str `"Location: url"`
        *  `exit` to terminate the current script
        * ```php
            if (/* Is the submission data validated? */) {
            header("Location: https://www.best-puppy-pix.com/");
            exit;
            }
            ```
* **6 - Connecting to a Database**
    ```php
    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ```
* **7 - Basic CRUD Operations:**
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
* **8 -  For Loop: shorthand**
    * A colon `:`  to open the code block.
        * Instead of a bracket `{`
    * The shorthand uses keywords to close the code block instead of a bracket `}`:
        * Use `endfor` to close a for loop
        * Use `endforeach` to close a foreach loop
        * Use `endwhile` to close a while loop
    * The closing keyword needs to be followed by a semicolon `;`.
    * Make sure to re-enter PHP mode using `<?php` or the echo shorthand `<?=` before using PHP variables in the loop
    * Check: *Loops in Html > reviewLesson.php*
    * Check: *Cafe Menu > index.php*
 -----

## Form Handling in PHP

* **1 - Introduction to Form Handling**
    * Form handling in PHP involves processing user inputs submitted via HTML forms.
    * PHP Superglobals:
        * `$_GET`: Retrieves form data sent via the URL (query string).
        * `$_POST`: Retrieves form data sent via the POST method.
        * `$_REQUEST`: Contains data from both $_GET and $_POST.

* **2-Basic Form Structure**
    * HTML Form: Forms are used to collect user data and send it to a PHP script for processing.
```html
<form action="process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    
    <input type="submit" value="Submit">
</form>
```

* Attributes:
    * `action`: Specifies the PHP file that will handle the form data.
    * `method`: Defines the HTTP method (GET or POST) used to send form data.

* **3- Handling Form Data in PHP**
    * Accessing Form Data: `$_GET` or `$_POST` superglobals to retrieve data.
    ```php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Name: $name<br>"; 
    echo "Email: $email<br>";
    }
    ```
    * ***Note:*** Always check the request method `($_SERVER["REQUEST_METHOD"])` to ensure proper handling.

* **4 - Validating Form Data**
    * Ensure the data received is **valid and secure**.
    * Common Validation Techniques:
        * **Required Fields:** Check if fields are filled out.
        ```php
        if (empty($_POST["name"])) {
            echo "Name is required";
        }
        ```
        * **Sanitizing Input:** Use functions like htmlspecialchars() to prevent XSS attacks.
        ```php
        $name = htmlspecialchars($_POST['name']);
        ```
        * **Validating Input:** `filter_var()` to validate specific types of data (e.g., email).
        ```php
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }
        ```

* **5 - Processing Form Data**
* **Storing Data:** Data can be stored in a database, file, or sent via email.
```php
// Example of storing in a database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
```
* **Redirecting After Submission:** `header()` to redirect users after processing the form.
```php
if ($formIsValid) {
    header("Location: thank_you.php");
    exit;
}
```

* **6 - Form Handling Best Practices**
* Always **sanitize and validate** inputs to prevent SQL injection and XSS.
* Use **prepared statements** when interacting with databases.
* Provide clear **feedback to users** on the status of their submission (e.g., success or error messages).
* Preserving Form Data: when validation fails, repopulate the form with the user's previously entered data.
```php
<input type="text" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
```

* **7 - Example: Complete Form Handling Script**
```php
// form_view.php
<form action="../includes/form_processing.php" method="post"> // to process.php
// if wanted to do it on to same page: index.php
<!-- <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> --> 
// if wanted to do it on to same page: index.php
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" 
        value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" 
        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
    <input type="submit" value="Submit">
</form>

<!-- Display Errors -->
<?php
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}
?>
```

```php
// form_processing.php
<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an errors array
    $errors = [];
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    // Validate inputs
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    // If no errors, process data
    if (empty($errors)) {
        // Example: Store data in a database (logic not implemented here)
        // $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        // Redirect after successful form submission
        header("Location: ../thank_you.php");
        exit;
    }
}
?>
```

```html
// thank_you.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <h1>Thank you for submitting the form!</h1>
    <p>We have received your information.</p>
</body>
</html>
```

-----

## AJAX Fundamentals 
* **1 - AJAX**
    * Definition:     
        * **AJAX (Asynchronous JavaScript and XML)** is a technique that allows web pages to update asynchronously by exchanging small amounts of data with the server behind the scenes.
        * Enables web applications to send and receive data without reloading the entire page.

* **2 - AJAX Flow:**
    * User interacts with the web page (e.g., clicks a button).
    * JavaScript makes a request to the server using AJAX.
    * Server processes the request (using PHP).
    * Server responds with data (e.g., JSON, HTML).
    * JavaScript dynamically updates the webpage with the server's response.

* **3 - Basic Syntax of AJAX**
    *  XMLHttpRequest or the Fetch API to send asynchronous requests from the client-side (JavaScript) to the server-side (PHP).
    * Using XMLHttpRequest:
    ```js
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle server response
            document.getElementById("response").innerHTML = xhr.responseText;
        }
    };
    // Sending data
    xhr.send("name=John&email=john@example.com");
    ```
    * Using the Fetch API (modern approach):
    ```js
    fetch('process.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'name=John&email=john@example.com'
    })
    .then(response => response.text())
    .then(data => {
        // Update the page dynamically with the response
        document.getElementById('response').innerHTML = data;
    });
    ```

* **4 - Handling AJAX Requests with PHP**
    * On the server-side, we use **PHP** to **process** the AJAX request and send a response.
    * When using `POST` requests in **AJAX**, we can access data sent via `$_POST` in **PHP**:
    ```php
    // process.php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get POST data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        // Process data (e.g., store it, validate, etc.)
        if (empty($name) || empty($email)) {
            echo "Name and Email are required!";
        } else {
            // Respond with a success message or other data
            echo "Hello, $name! Your email is $email.";
        }
    }
    ```

* **6 - Returning JSON Responses**
    * You can also use AJAX to request and return data in JSON format
    * Useful for APIs or dynamic data.
    * **JavaScript: Requesting & Handling JSON Responses:**
    ```javascript
    fetch('process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('response').innerHTML = `Welcome, ${data.name}!`;
        } else {
            document.getElementById('response').innerHTML = data.error;
        }
    });
    ```
    * **PHP: Sending JSON Responses**
    ```php
    <?php
    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        if (empty($name) || empty($email)) {
            echo json_encode(["success" => false, "error" => "Fields are required!"]);
        } else {
            echo json_encode(["success" => true, "name" => $name, "email" => $email]);
        }
    }
    ?>
    ```

* **7 - AJAX Best Practices**
    * **Error Handling:** Ensure you handle errors for failed requests (e.g., server issues, validation errors).
    ```js
    Copy code
    fetch('process.php', { method: 'POST', body: formData })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.text();
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    ```
    * **Security:**
        * **Sanitize and validate** input on the server-side (PHP) to prevent security vulnerabilities like XSS or SQL Injection.
        * Use **CSRF (Cross-Site Request Forgery) tokens** if dealing with sensitive forms.
    * **Returning JSON** instead of plain text is cleaner and more manageable, specially when handling more complex data structures 

* **8 - Contact Form with PHP and AJAX. Full Example:**
    * A contact form submission using PHP and AJAX, 
        * Ensuring we follow the AJAX best practices
        * Modular code, error handling, and proper status messages.
        * Data is **sanitized** (using htmlspecialchars() to prevent XSS attacks).
        * **Validation**: Includes server-side validation for empty fields and proper email format using filter_var().
        * Retruns JSON
    * File Structure
    ```bash
    /ajax-json-best-practices
        /views
            index.html
        /js
            ajax.js
        /includes
            process.php
    ```
    * index.html
    ```html
    <!-- /views/index.html -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form with AJAX</title>
    </head>
    <body>
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Submit</button>
        </form>

        <div id="response"></div>

        <!-- Link the AJAX script -->
        <script src="/js/ajax.js"></script>
    </body>
    </html>
    ```
    * ajax.js
    ```js
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('contactForm');
        const responseDiv = document.getElementById('response');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            const formData = new FormData(form);
            const requestOptions = {
                method: 'POST',
                body: formData
            };
            sendAjaxRequest('/includes/process.php', requestOptions)
                .then(handleResponse)
                .catch(handleError);
        });
        function sendAjaxRequest(url, options) {
            return fetch(url, options)
                .then(checkStatus)  // Check the status first
                .then(response => response.json());  // Parse JSON response
        }
        function checkStatus(response) {
            if (!response.ok) {
                throw new Error(`HTTP error: ${response.status}`);
            }
            return response;
        }
        function handleResponse(data) {
            if (data.success) {
                responseDiv.innerHTML = `<p style="color: green;">${data.message}</p>`;
            } else {
                responseDiv.innerHTML = `<p style="color: red;">${data.message}</p>`;
            }
        }
        function handleError(error) {
            responseDiv.innerHTML = `<p style="color: red;">An error occurred: ${error.message}</p>`;
        }
    });
    ```
    * process.php
    ```php
    <?php
    header('Content-Type: application/json');  // Set the content type to JSON
    $response = [];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        // Validate the fields
        if (empty($name) || empty($email)) {
            $response = [
                "success" => false,
                "message" => "Please fill out both Name and Email fields."
            ];
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = [
                "success" => false,
                "message" => "Please enter a valid email address."
            ];
        } else {
            // If validation passes, send a success message
            $response = [
                "success" => true,
                "message" => "Thank you, $name! Your email ($email) has been received."
            ];
        }
    } else {
        $response = [
            "success" => false,
            "message" => "Invalid request method. Please use POST."
        ];
    }
    echo json_encode($response);  // Encode the response as JSON
    ?>
    ```
    * ***Note:*** `sendAjaxRequest`
        * The function sendAjaxRequest keeps the code **modular and reusable** (AJAX best practices)
        * **Code Reusability:**
            * By defining the sendAjaxRequest function, you can reuse this function in multiple places if you have more AJAX requests in your project. 
            * eg: submit another form or make another request to a different URL, just call sendAjaxRequest()
        * **Separation of Concerns:**
            * It keeps the code organized and makes the form handling code cleaner.
            * This way, you can focus on handling the form submission (or response) in one place and delegate the actual network communication to another function.
        * **Maintainability:**
            * We might need to make changes to the way AJAX requests are sent (e.g., adding custom headers, changing the request method). 
            * By centralizing the AJAX request logic in the `sendAjaxRequest` function, you only need to **make updates in one place** rather than in every part of your code.


