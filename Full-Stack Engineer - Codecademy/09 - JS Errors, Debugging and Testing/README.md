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

## Testing

* **Errors** in software are **inevitable**. 
    * Unchecked, these errors can have painful and costly impacts on users and developers.
* Software professionals use **automated testing** to avoid this. 
    * During and after production
* **Software testing** is the process of assessing the completeness and quality of computer software.
    * Usually this is done by running a part of a system (like a web application)          
    and comparing the actual behavior to the expected behavior.
* **Test suite:** a collection of tests for a web application.
* **Errors**, are also called **bugs**. 
    * **A bug** is an error, fault, or flaw in software that makes a system behave in unexpected ways.
<br />

* **Manual Testing**
    * Manual testing is a form of testing done by a human interacting with a system. 
        * A list of actions and expected behaviors would be given:
        * With web apps, this might be clicking, dragging, and typing through a webpage. 
        * If the observed behavior doesn’t match the expected behavior, the application has an error.
<br />

* **Automated Testing**
    * Every hour of manual testing has a cost. 
    * The cost of testing can be reduced and the quality can be improved with **automated testing**.
    * Automated testing is the use of software to control the execution of tests and the comparison of actual behavior to expected behavior.  
    * Compared to manual testing, automated testing is:
        * **Faster**: it tests more of your product in less time.
        * **More reliable**: it’s less prone to error than a human is .
        * **Maintainable**: you can review, edit, and extend a collection of tests.
    * The workflow of automated tests:
        1. Write code and corresponding tests
        2. Enter a command into a terminal to run tests
        3. If the app behaves as intended, all tests should pass. Development is complete.
        4. If it does not behave as intended, at least one test should fail. Fix code and return to step 2.
<br />

* **Tests As Documentation**
    * Documentation is any content separate from implementation code that explains
        * How it works or ...
        * How to use it
    * **Tests as documentation** provide what many other forms cannot: (both)
        * **Human-readable** text to describe the application and ...
        * **Machine-executable** code to confirm the app works as described.
<br />

* **Regression**
    * When adding a new feature to your product, it’s possible that something will break.
    * Regression: when a break occurs within a feature developed earlier.
    * When functionality previously developed and tested stops working, you may say the functionality regressed.
    * Running an automated test suite is fast and repeatable,
        * We can run tests after every change to confirm that old features still work.
        * If they have regressed, the test output should notify you.
<br />

* **Writing automated tests** 
    * It takes time, but the cost is outweighed by the benefits: 
        * Increases confidence that your product works as expected (compared to manual testing)
        * Improves upon documentation
        * Reduces the likelihood of regression
<br />

* Testing Types:  
    * **Unit tests:** the smallest unit of code possible
    * **Integration tests:**  interactions between internal services in the application.
    * **End to end tests:**  test the whole application including the external services it depends on.

## JS: Error Handling
<!-- Continue here -->

## AUTOMATE AND ORGANIZE TESTS: Mocha

Mocha is used for organizing and automating test that provide useful feedback when errors occur.    
[Mocha Documentation](https://mochajs.org/#getting-started)     

*Note: Before writing any tests you’ll need to use ***Node.js*** and ***npm*** to set up a JavaScript project and install ***Mocha*** *
* **Node** allows you to run JavaScript in the terminal.
* **NPM** is a Node tool that allows you to download packages from the web.
* **Mocha** is a package used to test other JavaScript code.
<br />

In the Terminal
* To create a package.json (it can be used to manage packages for the project): 
    * `npm init`
* To install Mocha packages:
    * `npm install mocha -D`
* To run Mocha:
    * (Not recommended) To call it directly from node_modules 
        * `./node_modules/mocha/bin/mocha`
    * (**Recommended**) add a script to package.json
        * In the scripts object in package.json, set the value of "test" to mocha
        * ```javascript
            "scripts": {
                "test": "mocha"
                }
            ```
        *  Call Mocha using the Terminal:
        * `npm test`
<br />

* Mocha Blocks: describe & it
    * In Mocha:
        * `describe` : group tests
        * `it` : define tests
    * These two functions are used to make our test suite     
    **complete, maintainable, and expressive**
        * Structure our test suite
            * Organize tests into nested groups that reflect the structure of our implementation code.
        * Provide informative messages
            * Define our tests using human-readable strings.
* Mocha Block: assert
    * `assert.ok` : To write the tests themselves
        * Allows us to compare values and throw errors as needed using one function call
        * As a Node module, `assert` can be **imported** at the top of your files with
            * `const assert = require('assert');`
    * assert library:
        * `assert.equal()`: ==
        * `assert.strictEqual()`: ===
        * `assert.deepEqual()`: 
* ```javascript
    // import assert here
    const assert = require('assert');

    describe('+', () => {
    it('returns the sum of its arguments', () => {
        assert.ok(3 + 4 === 7);
        });
    });
    ```

<br />

* Setup, Exercise, and Verify
    * This well-defined separation of steps makes your test more      
    reliable, maintainable, and expressive.
    * **Setup**: create objects, variables, and set conditions that your test depends on
    * **Exercise**: execute the functionality you are testing
    * **Verify**: check your expectations against the result of the exercise phase.        
    You can use the assert library here
<br />

* Teardown
    * `it`:  one single test
    * In most situations, we will need to write many tests for a particular feature that get executed in succession
    * Running multiple tests can introduce issues if the tests make changes to the testing environment, for example:
        * Altering files and directory structure
        * Changing read and write permissions on a file
        * Editing records in a database
    * **The teardown phase** isolate tests by resetting the environment before the next test runs. Benefits:
        * Changes to the environment caused by one test do not affect the other tests
        * Isolated tests can be executed in any order
<br />

* Hooks
    * The Mocha test framework provides functions that enable us to reduce repetition, simplify the scope of each test, and more finely control the execution of our tests.
    * These functions (also referred to as hooks) are:
        * `beforeEach(callback)`: callback is run before each test
        * `afterEach(callback)`: callback is run after each test
        * `before(callback)`: callback is run before the first test
        * `after(callback)`: callback is run after the last test

## Write Expressive Test
* A good test framework is fast, complete, reliable, isolated, maintainable, and expressive.
* Make your tests expressive by using different assert
    * [Node.js Documentation: assert](https://nodejs.org/api/assert.html)

## TDD (Test-Driven Development) with Mocha

* **Test-driven development (TDD)** is a programming technique where you write test code before implementation code.
    * One keys to TDD is that we only write implementation code in response to the error message that our test revealed.      
    It is important to make sure that we are addressing one behaviour at the time. 
* Test code is written to **define the desired behavior** of your program. 
* The **test output** provides **descriptive error messages** that inform the implementation of your program.

* The Red-Green-Refactor Cycle
    * Driving forces of TDD is the red-green-refactor cycle. 
    * “Red” and “Green” correspond to the color of the text that our test framework produces in the terminal while running the tests in our suite.
    * **Phases:**  
        1. Write test code that fails
        2. Write implementation code to make the test pass
        3. Consider refactoring the code
    * **Red:** 
        * Write tests that describe the intended behavior of implementation code
        * then compare developer expectations with the actual results of implementation code. 
        * The tests should **always fail at first** because the implementation code for the desired behavior will be written **in response to the failing test**.
    * **Green:**
        * Write just enough implementation code to make the test pass. 
        * The tests return green because the implementation code executes the intended behavior described by the test in the red phase.
    * **Refractor:**
        * Clean up and optimize code following the characteristics of a good test.  Refactoring involves actively considering test and implementation code and making revisions to the code base. 
        * **The tests are passing and should continue to pass** throughout this phase of the cycle.
    * **Edge Case**
        * An edge case is a problem or situation that occurs only at an extreme (maximum or minimum) operating parameter.