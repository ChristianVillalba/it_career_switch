# Async JavaScript and HTTP Requests

## General Asynchronous Programming Concepts:

* **Synchronous Code** 
    * Executes in sequential order
    * It starts with the code at the top of the file and executes line by line until it gets to the end of the file 
    * This behavior is known as blocking (or blocking code) since each line of code cannot execute until the previous line finishes.
* **Asynchronous Code**
    * For most programming languages, the ability to execute asynchronous code depends on the number of threads that an app has access to.
    * We can think of a thread as a resource that a computer provides an app to do a task.
        * Typically one thread allows for an app to complete one task.
* **Asynchronous Code in Web Development**
    * If we use synchronous (blocking) code in the browser, we might be stopping a user from being able to interact with a web app until the code is done running. 
    * An asynchronous approach, we can cut down on the wait time. 
        * We’d load only the code that’s necessary for user interactions...
        * and then load up other bits of code in the background.
    * Asynchronous code creates better user experiences and make apps that work more efficiently.

## Introduction to Asynchronous JavaScript

* It is our job as developers to think about 
    * how much time it takes to complete a task 
    * how to plan around that wait.
    * Examples: contacting the back-end to retrieve information, querying our database, or making a request to an external server, like a 3rd party API.
    * We can use asynchronous code to run these tasks in the background.
<br />

* JavaScript and Asynchronous Code
    * JavaScript is a single-threaded language. 
        * This means it has a single thread that can carry out one task at a time. 
    * Javascript has what is known as the** event loop** 
        * A specific design that allows it to **perform asynchronous** tasks even while only **using a single thread**
<br />

* Asynchronous Callbacks
    * This is a type of callback function that executes after a specific condition is met 
    * then, it runs concurrently to any other code currently running.
    * ```javascript
        easterEgg.addEventListener('click', () => {
            console.log('Up, Up, Down, Down, Left, Right, Left, Right, B, A');
        });
        ```
    * The function passed as the second argument of `.addEventListener()` is an **asynchronous callback** — 
        * This function doesn’t execute until the easterEgg is clicked
<br />

* setTimeout    
    * A built-in JS functions that can perform tasks asynchronously
    * `setTimeout()` it puts our JS program to **wait** a minimum amount of time **before executing** its callback function.
    * ```javascript
        setTimeout(() => {
            console.log('Delay the printing of this string, please.');
        }, 1000);
        ```
<br />

* setInterval   
    * A built-in JS functions that can perform tasks asynchronously
    * `setInterval()` takes a callback function and a number (time) specifying how often the callback function should execute
    * ```javascript
        setTimeout(() => {
            console.log('Delay the printing of this string, please.');
        }, 1000);
        ```

## Concurrency Model and Event Loop in JavaScript

* **JavaScript** can **emulate concurrency** by looking at what’s going on with the **event loop** behind the scenes. 
* JavaScript is a single-threaded language. 
    * wThis means that two statements can NOT be executed simultaneously.
    * But as we already learned, we can run non-blocking code in JavaScript, 
        * which is where the Event Loop comes in.
    * Example:
        * ```javascript
            console.log("I’m learning about");
            setTimeout(() => { console.log("Event Loop");}, 2000);
            console.log("the");
            // I’m learning about the Event Loop
            ```
        1. A statement is logged.
        2. The setTimeout() function is executed.
        3. A third line of code executes and logs text: “the”.
        4. Finally, the setTimeout() function timer completes and additional text is logged: “Event Loop”.
  <br />

* Concurrency in JavaScript: Event Loop
    * We can emulate concurrency using the event loop.     
    * **Event Loop** is a system for managing code execution 
    * We have data structures that we call the heap and the call stack, which are part of the JavaScript engine. 
        * The heap and call stack interact with Node and Web APIs
        * pass messages back to the stack via an event queue
        * The event queue’s interaction with the call stack is managed by an event loop.
        * All together, those parts maintain the order of code execution when we run asynchronous functions.








