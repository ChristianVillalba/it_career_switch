# Web Security

### OWASP's Top 10
* The Open Web Application Security Project (OWASP) is a nonprofit foundation that provides guidance on how to develop, purchase and maintain trustworthy and secure software applications. 
* OWASP is noted for its popular Top 10 list of web application security vulnerabilities:
    * I**njection:**     
    An attacker “injects” malicious code into an interpreter, usually through an input field, in order to gain access to information or damage a system
    * **Broken Authentication:**     
    An insecure authentication system allows attackers to impersonate other users.
    * **Sensitive Data Exposure:**    
     Sensitive data is improperly or insufficiently protected.
    * **XML External Entities (XXE):**    
     Malicious XML causes an insecure XML processor to access data or execute code that it shouldn’t.
    * **Broken Access Control:**      
     Authorization isn’t properly enforced, allowing attackers to access resources beyond their authorization.
    * **Security Misconfiguration:**     
    Insecure, improper, or a lack of security configurations degrade the security of an environment.
    * ***Cross-Site Scripting (XSS):***     
    Malicious input is treated as javascript that can run on victims’ browsers.
    * **Insecure Deserialization:**     
    Data from an untrusted source is deserialized into an object, potentially containing malicious code or data, within a program.
    * **Using Components with Known Vulnerabilities:**     
    Vulnerable components, such as out-of-date packages or software, are included within an environment, allowing attackers to use existing exploits to attack.
    * **Insufficient Logging and Monitoring:**     
    Lack of detailed monitoring makes it easier for attackers to stay undetected, and it makes it harder to respond after an attack has occurred.


### Introduction: Data Security
* **Transport Layer Security (TLS):**     
It is a protocol for establishing secure connections between computers.
* TLS’s largest claim to fame is that **it powers HTTPS**, the protocol that lets us browse the web securely.
* **Role-Based Access Control (RBAC)** is a way of managing permissions using roles.      
It is very widely used, showing up in applications, operating systems, and even physical security.

### AUTHENTICATION AND AUTHORIZATION IN POSTGRES
* Host-Based Authentication
* User and Role Management
* Server Configuration

### Cross-Site Request Forgery (CSRF) Attacks
* Cross-Site Request Forgery (CSRF) is a common class of vulnerability that tricks a user into submitting a web request on behalf of an attacker.
* **Preventing CSRF attacks** are relatively easy to mitigate.
* One of the simplest ways to prevent these attacks is to **add a CSRF token**. 
    * This token is a unique value that is added to each request. 

### SQL Injection
* That step of checking the input against the database can be abused by attackers. 
* Through a cleverly and carefully crafted input an attacker can inject code directly into the database query
* Preventing SQL Injection
    * **Sanitize Inputs:**    
    Input sanitization is a cybersecurity measure of checking, cleaning, and filtering data inpu
    * `validator.js` is a library.    
    It validates forms and sanitize inputs before using a form value in the application code.
    * Using prepared statements with placeholders to ensure that SQL queries are properly escaped.
* Check: *PreventingSQLInjectionAttacks*

### DEFENSIVE CODING IN JAVASCRIPT
* The `eval()` function in JavaScript takes a string as an argument and executes it as Javascript source code.
    * Best practices with eval are:
        * Avoid using it altogether!
        * If you must use it, use a safer version, and only allow trusted, non-user input.
* The `exec()` method takes a string as an argument and runs it as a shell command, enabling shell syntax within JavaScript. 
    * The danger is that unrestricted commands can access, modify, and delete files. 
* Dangers and Secure Use of the fs Module:
    * The **fs module** coupled with improperly sanitized user input gives attackers access to our entire file system and exposes it to path traversal and file inclusion vulnerabilities.
* Dangers and Secure Use of Regular Expressions
    * Regular Expressions are used in almost every single programming language to validate whether user input adheres to an expected condition. 
    * To prevent this danger, we can use the validator npm package. It provides a library of string validators and sanitizers for things like IP addresses,
* Secure Your Code: Strict Mode
    * Using strict mode throws errors that would otherwise be silent, which can help reveal vulnerabilities. T
    * To invoke strict mode, simply put "use strict"; in single or double quotes on top of your JavaScript file.
* Secure Your Code: Static Code Analysis
    * Static Code Analysis evaluates a code without executing it.
    * A lint, or linter, is a static code analysis tool
    * the most popular JavaScript linters are:
        * ESLint
        * JSLint
        * JSHint

