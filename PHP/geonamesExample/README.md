## Task: 

Best practices :     
• Write a meaningful `<title>` tag as this will be used by search engines.    
• All CSS stylesheets and JavaScript files must reside in the same folder structure as
the application. Stylesheets and JavaScript libraries delivered from Content Delivery
Networks (CDNs) are useful for online demos and examples but should not be used
in production systems.    
• Use minified files whenever possible including your own. Most good program
editors will have extensions to do this and they can also act as an early warning for
syntax errors.    
• Whilst links to stylesheets are always in the `<head>` section, links to JavaScript files
should always be the last statements before the closing `</body>` tag. Browsers do
not support asynchronous loading of files and so loading the JavaScript last will
ensure that the HTML renders uninterrupted. Always use relative paths.    
• Ensure that your style sheet is the last to be loaded and that your JavaScript is also.    
• Never use inline styling or embed CSS in the `<head>` section.    
• Indent code to make it more readable.    
• Where possible combine CSS files together and JS files together to reduce the
number of downloads.    
• Minify CSS and JS files.    
• Include a favicon.png in the root folder as some external systems search for it and
use it as a default avatar.    
• Create folders to separate your CSS and JavaScript from external libraries.    
• Use a preloader to hide the main HTML whilst it loads. The window load event fires
once the site has been rendered:     
```HTML
<div id=”preloader”></div>
```
```css:
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
}
#preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #f2f2f2;
    border-top: 6px solid #56829e ;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
}
@-webkit-keyframes animate-preloader {
    0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
}
    100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
}
@keyframes animate-preloader {
    0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    }
    100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    }
}
```
```JavaScript (JQuery):
$(window).on('load', function () {
    if ($('#preloader').length) {
        $('#preloader').delay(1000).fadeOut('slow', function () {
            (this).remove();
    });
    }
});
```

--------
--------

## Notes:

* XAMPP: 
    * Once you have a web server installed then you will have a new folder for storing your web applications.
    * XAMPP will have a folder named “htdocs”.
* cURL:
    * It is a tool for transferring files and data with URL syntax.
    * there is also a component in PHP that provides access to it.
* getCountryInfo.php
    * It makes use of cURL:
        * A method that emulates typing the address into a browser bar, 
        * and then stores the results to a variable
    * syntax:
        * The code that is provided here will work in many scenarios
        * If other options are required to make other APIs work, then they will be provided as examples by the API provider.
* index.HTML    
    * each cell in the second column of the table
have been assigned an id as has the two select and the button
    * The last two lines before
the </body> tag ensure that both jQUery and script.js are included in the app
* script.js
    * event handler on the “click” event of the button,
    * Click > AJAX call to the PHP routine “getCountryInfo.php”,
    * sets the expected format of whatever returns to json,
    * and, passes the values as the parameters: country & lang.
*  Tasks:
    * Create a very simple HTML application with a table of other API’s
    * The middle column, “API description”, should also include user inputs for the parameters salrequired by each API.
    * Select three other APIs from this list GeoNames WebServices overview to include in your app. 
    * You’ll have to create your own free account and also enable API access in your account
settings. 


--------
--------

## Completed Tasks:
* ✔ Install Xampp (Web Server)
* ✔ Run Geonames in localhost (using Xampp)
* ✔ 