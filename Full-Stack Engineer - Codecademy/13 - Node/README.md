# Node

* Node
    * Node.js is a JavaScript runtime: 
    * An environment that allows us to execute our JavaScript code by converting it into something a computer can understand.
    * We run JavaScript programs with Node by typing in the terminal:
        * `node` + ***NameOfTheDirectory***
* REPL
    * REPL is an abbreviation for **read–eval–print** loop. 
    * It’s a program that loops, or repeatedly cycles through three different: states: 
        * **The read state** where the program reads input from a user 
        * **The eval state** where the program evaluates the user’s input
        * **The print state** where the program prints out its evaluation to a console 
        * Then it **loops** through these states **again**
    * Enter Node REPL: [in The Terminal] 
        * `node` + Enter
    * We can list all of the core modules built into Node.js from the Node REPL:    
        * `node` + Enter
        * `require('module').builtinModules` 
* The Process Module
    * A process is the instance of a computer program that is being executed.
    * The `process.env` property is an object which stores and controls information about the environment in which the process is currently running.
* `require()`
    * Code can be organized into separate files modules, and combined with the require function
* Core modules
    * Built into the Node.js environment
    * Efficiently perform common tasks: 
    * The **process** module: 
        * It gives access to information about the Node.js runtime environment
    * The **os** module
        * It provides methods to retrieve information about the computer, operating system, and network interfaces.
    * The **util** module
        * It contains methods used to maintain and debug your code
* Node Essentials
    * **Blocking code** runs **synchronously** and 
    * **Non-blocking code**, such as timer functions, runs **asynchronously**
    * **Core modules** are provided to developers to **perform common tasks efficiently**. 
        * Core modules are used by passing a string with the module’s name into the `require()` statement
    * Node allows 
        * **Output:** data/feedback to a user-provided by a computer
        * **Input:** data/feedback to the computer provided by the user. 
    * Provided **callback functions** are expected to have an **error** as their **first parameter** To handle errors during asynchronous operations 
    * A **stream** is processing data sequentially piece by piece
    * The `buffer` **module** provides global Buffer objects used to represent a fixed amount of memory that can’t be resized
    * The `timer` **module** provides functions that allow developers to execute callbacks at a specified point of time in the future
        * **The functions** of the timers module are put into a **queue** that is **processed** at **every iteration** of the Node.js event loop
    * The `fs` **module** is an API for interacting with the **file system**
    * `EventEmitter` class’s `.on()`
        * It assigns a listener callback function to a named event
        * The .on() method’s **arguments** are: 
            * The **name of the event** 
            * The **listener callback function**
