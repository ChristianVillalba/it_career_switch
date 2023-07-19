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