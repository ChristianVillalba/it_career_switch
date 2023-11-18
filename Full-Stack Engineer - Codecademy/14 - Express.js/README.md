# Express.js

* Express.js: Server-Side Frameworks 
    * **Framework:**  a collection of code to make it easier to accomplish a specific task
        * Developers must follow the rules and syntax put forth by the framework to use it properly
    * **Server-side framework:** used to run web applications and handle web development workflows on the server-side (back-end) 
        * eg: accessing databases, generating HTML, handling URL routing
    * A server-side framework can **handle** a lot of the **back-end responsibilities**
    * Other benefits:
        * Access to libraries built to work with the framework
        * Existing resources and documentation for solving common problems
        * Improved security

* Node.js and Express.js
    * You can create a back-end entirely with Node.js
    * The **Express.js framework** makes implementing some **core functionality** much quicker than doing it from scratch
    * [Express Documentation](https://expressjs.com/en/4x/api.html)
<br />

* Starting A Server
    * Express is a Node module, 
        * In order to use it, we will need to import it into our program file
        * ```javascript
            const express = require('express');
            const app = express();
            ```
    * The purpose of a server is to listen for requests
        * The server will then listen on the specified port 
        * and respond to any requests that come into it.
        * ```javascript
            const PORT = process.env.PORT || 3000;
            app.listen(PORT, () => {
            console.log(`Server is listening on port ${PORT}`);
            });
            ```
    * The second argument is a callback function that will be called once the server is running and ready to receive responses.

* Express.Router
    * An Express router provides a subset of Express methods.
        * `express.Router();`
    * We mount it at a certain path using `app.use()` 
    * and pass in the router as the second argument. 
    * This router will now be used for all paths that begin with that path segment:
        * ```javascript
            const webpageRouter = express.Router();
            app.use('/monsters', webpageRouter);
            webpageRouter.get("/idRoute", (req, res, next) => {...});
            ```  
* Using Multiple Router Files:
    * We will keep each router in its own file, 
    * And require them in the main application. 
    * This allows us to keep our code clean and our files short.