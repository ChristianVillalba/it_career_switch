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
    * MThe Event Loop: parts
        * Memory Heap
            * The heap is a block of memory where we store objects in an unordered manner.
            * JavaScript variables and objects that are currently in use are stored in the heap.
        * Call Stack / Stack
            *  It tracks what function is currently being run in your code.
            *  When you invoke a function, a frame is added to the stack. 
            *  Frames connect that function’s arguments and local variables from the heap. 
            *  Frames enter the stack in a last in, first out (LIFO) order. 
            * So when we say the **call stack tracks** what function is currently being run in our code, what we are tracking is the current **execution context**.
        * Event Queue
            * The event queue is a list of messages corresponding to functions that are waiting to be processed. 
            * Messages enter the queue in a first in, first out **(FIFO) order**.
            * No code is executed in the event queue;  
                * It holds functions that are waiting to be added back into the stack
        * Event Loop
            * Messages waiting in the **event queue** to be added back into the stack are added back **via the event loop**. 
            * When the call stack is empty, it can add those one at a time to the stack for execution
        * Node or Web APIs
  <br />

* Thanks to the event loop, JavaScript is a single-threaded, event-driven language that can run non-blocking code asynchronously. 
* The Event Loop can be summarized as: 
    * When code is executed, it is handled by the heap and call stack, 
        * which interact with Node and Web APIs. 
    * Those APIs enable concurrency and pass asynchronous messages back to the stack via an event queue. 
    * The event queue’s interaction with the call stack is managed by an event loop. 
    * All together, those parts maintain the order of code execution when we run asynchronous functions.

## JS Promises

* The Promise is an Object, introduced with ES6
* `Promise` handles asynchronicity 
    * It represents the eventual outcome of an asynchronous operation. 
* A Promise object can be in one of three states:
    * **Pending** 
        * The initial state: the operation has not completed yet.
    * **Fulfilled**
        * The operation has completed successfully and the promise now has a resolved value. 
        * For example, a request’s promise might resolve with a JSON object as its value.
    * **Rejected**
        * The operation has failed and the promise has a reason for the failure. 
        * This reason is usually an **Error** of some kind.
* Example: dishwasher [pending promise] Resolve: clean dishes / Rejected: no soap
  <br />

* Constructing a Promise Object
    * `const myFirstPromise = new Promise(executorFunction);`
    * `new` + `Promise` Constructor method
    * The Promise constructor method takes a function parameter **Executor Function**
    * **Executor Function** 
        * It **runs automatically** when the constructor is called
        * It **starts an asynchronous operatio**n and dictates how the promise should be settled.
        * The executor function has two function parameters: 
            * `resolve()` is a function with one argument.
                * will change the promise’s status from ***pending*** to ***fulfilled***
                * and the promise’s resolved value will be set to the argument passed into resolve()
            * `reject()` is a function that takes a reason or error as an argument.
                * will change the promise’s status from ***pending*** to ***rejected*** 
                * and the promise’s rejection reason will be set to the argument passed into reject().
    * ```javascript
        const executorFunction = (resolve, reject) => {
            if (someCondition) {
                resolve('I resolved!');
            } else {
                reject('I rejected!'); 
            }
        }
        const myFirstPromise = new Promise(executorFunction);
    ```
<br />

* The Node setTimeout() Function
    * Rather than constructing promises, you’ll be handling Promise objects returned to you as the result of an asynchronous operation. 
    * These promises will start off pending but settle eventually.
    * `setTimeout()` is a Node API (a comparable API is provided by web browsers) that uses callback functions to schedule tasks to be performed after a delay. 
    * `setTimeout()` has two parameters:
        * A callback function  
        * A delay in milliseconds
    * setTimeout() to construct asynchronous promises:
    * ```javascript
        const returnPromiseFunction = () => {
            return new Promise((resolve, reject) => {
                setTimeout(( ) => {resolve('I resolved!')}, 1000);
            });
        };
        const prom = returnPromiseFunction();
    ``` 
<br />

* Consuming Promises
    * The initial state of an asynchronous promise is pending  
        * but we have a guarantee that it will settle. 
    * `.then()` method:  “I have a promise, when it settles, then here’s what I want to happen…”
    * `.then()` is a **higher-order function**: it takes **two callback** functions as arguments (**handlers**).    
        * **onFulfilled**,a success handler, 
            * It should contain the logic for the promise **resolving**.
        * **onRejected**, a failure handler, 
            * It should contain the logic for the promise **rejecting**.
    * ```javascript
        prom
        .then((resolvedValue) => {
            console.log(resolvedValue);
        })
        .then(null, (rejectionReason) => {
            console.log(rejectionReason);
        });
        ``` 
<br />

* Using catch() with Promises
    * `.catch()` to create even more readable code
    * The `.catch()` function takes only one argument: **onRejected**
    * Using `.catch()` accomplishes the same thing as using a `.then()` with only a failure handler.
    * ```javascript
        prom
        .then((resolvedValue) => {
            console.log(resolvedValue);
        })
        .catch(null, (rejectionReason) => {
            console.log(rejectionReason);
        });
        ``` 
<br />

* Chaining Multiple Promises
    * One common pattern we’ll see with asynchronous programming is multiple operations which depend on each other to execute or that must be executed in a certain order. 
    * This process of chaining promises together is called **composition**. 
    * ```javascript
        firstPromiseFunction()
        .then((firstResolveVal) => {
            return secondPromiseFunction(firstResolveVal);
        })
        .then((secondResolveVal) => {
            console.log(secondResolveVal);
        });
        ```    
<br />

* Avoiding Common Mistakes
    * Promise composition allows for much more readable code than the nested callback syntax that preceded it. 
    * However, it can still be easy to make mistakes:
        * Nesting promises instead of chaining them.
        * Forgetting to return a promise.
<br />

* Using Promise.all()
    * Dealing with multiple promises, but we don’t care about the order
    * To maximize efficiency we should use concurrency
    * `Promise.all()` for multiple asynchronous operations happening together
    * `Promise.all()` accepts an **array of promises** as its argument and **returns a single promise**
        * If every promise in the argument array resolves
            * The single promise returned from Promise.all() will resolve with an array containing the resolve value from each promise
        * If any promise from the argument array rejects
            * The single promise returned from Promise.all() will immediately reject with the reason that promise rejected.
            * This behavior is called **failing fast**.

## Async Await

* JavaScript used **callback functions** to handle **asynchronous actions**.
    * The problem with callbacks is that they encourage complexly nested code which quickly becomes difficult to read, debug, and scale.
* **ES6** integrated native **promises** 
    * They allow us to write significantly more readable code.
* **ES8** provides a new syntax for handling our asynchronous action, `async...await`
    * It doesn’t introduce new functionality
    * Introduces a **new syntax** for using promises and generators
    * Powerfully improves the **readability and scalabilit**y of our code.
<br />

* `synac`: declare an async function
* Inside an async function we use the `await`
    * It pauses execution of our function until an asynchronous action completes and the awaited promise is no longer pending
    * `await` returns the resolved value of the awaited promise
    * We can write **multiple await statements** to produce code that reads like synchronous code.
* We use try...catch statements within our async functions for error handling
* We should still take advantage of **concurrency** by writing async functions that allow **asynchronous actions** to happen in concurrently whenever possible.

<br />

* The `async` keyword is used to write functions that handle asynchronous actions
    * ```javascript
        const myFunc = async () => {
        // Function body here
        };
        myFunc();
        ``` 
* async functions are almost always used with the additional keyword `await`
    * The `await` keyword can only be used inside an async function
    *  it returns the resolved value of a Promise. 
<br />

* Handling Dependent Promises

* Handling Errors
    * With `async...await`, we use `try...catch` statements for **error handling**. 
        * ```javascript
            async function usingTryCatch() {
                try {
                    let resolveValue = await asyncFunction('thing that will fail');
                    let secondValue = await secondAsyncFunction(resolveValue);
                } catch (err) {
                    // Catches any errors in the try block
                    console.log(err);
                }
            }
            usingTryCatch(); 
        ``` 

* Handling Independent Promises
    * Remember that `await` **halts** the execution of our **async function**. 
    * **Multiple truly independent promises** that we would like to execute fully in parallel:
        * Use individual `.then()` functions and 
        * Avoid halting our execution with `await`

* Await Promise.all()
    * A way to take advantage of concurrency for multiple Promises that can be executed simultaneously 
    * We can pass an array of promises as the argument to `Promise.all()`
        * It will return **a single Promise**
        * This Promise will resolve when all of the promises in the argument array have resolved.
        * This Promise’s resolve value will be an array containing the resolved values of each promise (from the argument array)