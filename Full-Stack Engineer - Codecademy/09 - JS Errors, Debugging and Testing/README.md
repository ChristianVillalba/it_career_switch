# JavaScript: Errors, Debugging and Testing

## Error Stack Traces

* **The compiler** comes across a piece of code that it can’t interpret:
    * As a result, it throws an **error** back
    * To let us know that it has to stop and why
    * This information is logged as an error stack trace
* **Error Stack Trace**: a printed **message** containing information about the error:
    * In what **line** did the error occur
    * What **type** of error was thrown
        * SyntaxError: a typo creates invalid code
        * ReferenceError: a variable does not exist
        * TypeError: perform an operation on a value of the wrong type
    * What is the **error message**

## Debbuging Errors

* A **process** for efficiently working through your code’s errors one by one:
    1. Run your code. Using the first error’s stack trace:     
    identify the error’s type, description, and location.
    2. Go to the file name and line number indicated by the error stack trace.      
    Using the error type and description, identify the bug in your code.
    3. Fix the bug and re-run your code.
    4. Repeat steps 1-3 until your code no longer throws any errors.
* Locating Silent Bugs: 
    * Even if your code runs error-free, it is not necessarily bug-free.
    * `console.log()`: An incredibly powerful tool for locating bugs in our code logic
* Other resources:
    * Documentation
    * Google
    * Stack Overflow
* Debbuging process review: 
    1. Is your code throwing errors?
        * Read the error stack trace
        * Go to the error’s location and try to fix
    2. Is your code broken but not throwing errors? 
        * console.log()
        * Unexpected results occur: isolate the bug and try to fix it.
    3. Did you locate the bug using steps 1 and 2, but can’t fix the bug?
        * Consult documentation
        * Google your issue and consult Stack Overflow for help


