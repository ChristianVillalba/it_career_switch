# HTTP Requests, Web API, REST, JSON, Requests with ES6

## HTTP 
* **HTTP (Hypertext Transfer Protocol)**is used to structure requests and responses over the internet. 
    * HTTP requires **data to be transferred** from one point to another over the network.
    * The transfer of resources happens using **TCP (Transmission Control Protocol)**.
* **TCP (Transmission Control Protocol)** is used to manage many types of internet connections in which one computer or device wants to send something to another. 
* HTTP is **the command language** that the devices on both sides of the connection must follow in order to communicate.
* **HTTPS: HTTP Secure** allows you to **encrypt data** that you send and receive. 
    * HTTPS is important to use when passing sensitive or personal information to and from websites. 

## Web APIs
* Application Programming Interface (API) is a software tool that makes it easier for developers to interact with another application to use some of that application’s functionality. 
    * APIs are built to solve specific, repeated, and potentially complex problems.
* There are two main categories of web APIs: 
    * **Browser APIs** 
        * Specific to writing code related to browsers and give developers access to information that the browser can also access. 
            * Example:geolocation API which allows the program to know where a user is when accessing our app.
        * [Web APIs - MDN Documentation](https://developer.mozilla.org/en-US/docs/Web/API)
    * **3rd party APIs**
        * Provide some type of functionality or information from a third-party, usually a company
            * Example: OpenWeather API to get in-depth information about the weather in an area
* When making a request to API, we might have to supply more details about what information we want.
* If we get a successful response, we still have to decide how to consume the response data.
* Many APIs format their data using **JavaScript Object Notation (JSON)** which looks like a **JavaScript Object**.
    * ```javascript
            { 
        "temperature" : { 
            "celcius" : 25,
        },
        "city": "chicago", 
        }
    ```

## REST: REpresentational State Transfer

* It is an **architectural style** for providing standards between computer systems on the web.         
    * It makes easier for systems to communicate with each other. 
*  **RESTful systems**: or REST-compliant systems are stateless and separate the concerns of client and server: 
    * **Separation of Client and Server**:
        * The implementation of the client and the implementation of the server can be done independently:
        * The code on the client side can be changed at any time without affecting the operation of the server
        * The code on the server side can be changed without affecting the operation of the client
    * **Statelessness**
        * The server does not need to know anything about what state the client is in and vice versa.
        * This constraint of statelessness is enforced through the use of resources, rather than commands.
        * Because REST systems interact through standard operations on resources, they do not rely on the implementation of interfaces.

## JSON
* JSON (javaScript Object Notation)  standard that facilitates storing and transfer data between all programming languages.
    * JSON is heavily used to facilitate data transfer in web applications between a client, such as a web browser, and a server.

## Requests with ES6

* There are many types of **HTTP requests**. 
    * The four most commonly used types of **HTTP requests** are **GET, POST, PUT, and DELETE**.
    * In this lesson, we’ll cover GET and POST requests:
        * **GET request**: we’re retrieving, or getting, information from some source (usually a website).
        * **POST request**: we’re posting information to a source that will process the information and send it back.
    * JavaScript uses an event loop to handle asynchronous function calls.
        * The functions that make **requests** that need to wait for servers to respond then get sent to a separate queue.
        * Once the stack has cleared, then the functions in the queue are executed.
        * Note: Web developers use the event loop to create a smoother browsing experience by deciding when to call functions and how to handle asynchronous events. 
<br />

* GET Requests using `fetch()`
    * **Creates a request Object**     that contains relevant information that an API needs.
    * **Sends that request Object**     to the API endpoint provided.
    * **Returns a Promise**     that ultimately resolves to a response object
        * It contains the status of the promise with information the API sent back.
<br />

* POST Requests using Fetch