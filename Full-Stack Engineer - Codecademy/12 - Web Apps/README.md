# Web Application 

* A web application is an application software that does not require installation and can instead be accessed from a remote server via web browser.
* Web applications are made for interaction, 
    * Allowing users to send and consume data between the browser and the web server.
    * eg: from logging in to make payments

* Difference: Website & Web App
    * **Website:** 
        * A set of information-carrying pages that are inter-related
        * Accessed through a web browser
        * **Content**
    * **Web Application:** 
        * Application software that runs on a web server
        * Accessed through a web browser
        * **Interactions**

* Web Application Architecture
    * The most common design paradigm:
        * A presentation layer (web browser)
        * Application layer (server)
        * Storage layer (database)
    * Additional layers may be required:
        * Integration layer between the application and storage layers (APIs)

* Single-Page Application (SPA)
    * SPAs combine the content of traditional websites with the smooth user experience of mobile applications
* Multi-Page Applications
    * A multi-page file structure that lives on a server  
    * Each time new data is needed for the browser view, a request is sent to the server, which returns a new set of page files.
    * Web applications that require faster and more complicated interaction sometimes struggle to keep up

## Single-Page Application (SPA)

* A web application that interacts with the web browser by dynamically rewriting the current web page with new data from a web server
    * Instead of the default method of the browser loading entire new pages.
* **SPA Frameworks:**
    * These tools help with many tasks from controlling the view of the page to managing the application build:
    * React is a popular JavaScript library for building single-page applications. It focuses on creating components that can render themselves differently based on an application’s current state and user data.
    * Vue.js is a framework that uses templating within a single HTML file while the application logic controls what is rendered.
    * Others: Angular JS

* **SPA: Pros and Cons**
    * Pros:
        * SPAs are fast
            * By eliminating requests for new files SPAs provide a real-time interface with their users.
        * Reuse of code:
            * It saves time within a project and across multiple projects
            * Some components are general enough that they can be reused from project to project
        * Easier path to migrate code to a mobile application
            * The back-end of the application feeds data to the decoupled front-end interface. 
            * This separation of tasks allows the creation of a mobile app UI while maintaining the back-end logic of the application
    * Cons:
        * SPAs require more files to run at startup 
            *  The load time of the application can be longer
            * SPA load time can be minimized through strategically loading resources throughout the run of an application
        * Search Engine Optimization (SEO) has some pitfalls
            * SEO is an ever-changing world so strategies already exist to mitigate these downsides
        * SPAs may not function as expected within the browser
            * This can be frustrating for users who are expecting certain functionality within their browsers
            * eg: back function
        
* Conclusion
    * Single-page applications provide a better user experience while running within a web browser. 
    * They are the right choice for applications that need to provide real-time or complex interaction with their users. 
    * Their complexity continues to be minimized by frameworks such as React and Vue.js