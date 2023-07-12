# Building Interactive Websites: JS & DOM

HTML creates the skeleton of a webpage, but JavaScript introduces interactivity

## DOM

* The DOM is a **structural model** of a web page that allows for **scripting languages (JS)** to access that page.
* The system of organization in the DOM mimics the nesting structure of an HTML document.
* Elements nested within another are referred to as the children of that element. 
* The element they are nested within is called the parent element of those elements.
* The DOM also allows access to the attributes of an HTML element such as style, id, etc.
* Nodes in DOM Tree
    * A node in the DOM tree is the intersection of two branches containing data

## The Script Element

* HTML creates the skeleton of a webpage, but JavaScript introduces interactivity
* The `<script>` element has an opening and closing tag. 
    * You can embed **JavaScript** code inbetween the opening and closing script tags.
* You link to external JavaScript files with the **src attribute** in the opening script tag.
* By default, scripts are loaded and executed as soon as the HTML parser encounters them in the HTML file
    * The HTML parser waits to load the entire script before from proceeding to parse the rest of the page elements.
* The `defer` attribute ensures that the entire HTML file has been parsed before the script is executed.
    * `<script src="example.js" defer></script> `
* The `async` attribute will allow the HTML parser to continue parsing as the script is being downloaded, but will execute immediately after it has bee
    * `<script src="example.js" async></script>`
* The **old convention** was to put scripts right before the `</body>` tag. 
    * This prevents the script from blocking the rest of the HTML content. Now, 
* The **new convention** is to put the script tag in the `<head>` element and to use the defer and async attributes.

## JavaScript and the DOM   

* The `document` keyword grants access to the **root of the DOM** in JavaScript
    * The `document` object provides a JS interface to access the DOM
* The DOM Interface allows you to select a specific element with CSS selectors by using the `.querySelector()` method.
* You can access an element directly by its ID with the `.getElementById()` method which returns a single element.
* You can access an array of elements with the `.getElementsByClassName()` and `.getElementsByTagName()` methods, then call a single element by referencing its placement in the array.
* The `.innerHTML` and `.style` properties allow you to modify an element by changing its contents or style respectively.
* You can create, append, and remove elements by using the `.createElement()`, `.appendChild()` and `.removeChild()` methods respectively.
* The `.onclick` property can add interactivity to a DOM element based on a click event.
* The `.children` property returns a list of an element’s children and the .parentNode property returns the element’s closest connected node in the direction towards the root.

## Events

* An Event represents user interactions and browser manipulations in the DOM.
    * Not all DOM Events have event handlers associated with them.
* JS interprets events as Objects in the DOM with pre-determined properties and methods.
* You can register events to DOM elements using the `addEventListener()` method.
* The `addEventListener()` method takes two arguments: 
    * An **event type** and 
    * An **event handler** function.
* When an **event is triggered** on the **event target**, the registered event **handler function executes**.
    * The **event target** is the DOM Element that the event fires on.
* **Event handler functions** can also be registered as values of `onevent` properties of their event target.
* Event object properties like `.target`, `.type`, and `.timeStamp` are used to provide information about the event.
* The `addEventListener()` method can be used to **add multiple event handler functions** to a single event.
* The `removeEventListener()` method **stops specific event handlers** from “listening” for specific events firing.

## HTML Forms 

* The purpose of a Form is to allow users to **input information and send it**.
* The **Form‘s action** attribute determines **where** the form’s information goes.
* The **Form‘s method** attribute determines **how** the information is sent and processed.
* To add fields for users to input information we use the `<input>` element and set the type attribute to a field of our choosing:
    * Type  `"text"` creates a single row field for text input.
    * Type  `"password"` creates a single row field that censors text input.
    * Type  `"number"` creates a single row field for number input.
    * Type  `"range"` creates a slider to select from a range of numbers.
    * Type  `"checkbox"` creates a single checkbox that can be paired with other checkboxes.
    * Type  `"radio"` creates a radio button that can be paired with other radio buttons.
    * You can check **multilple checkboxes** but **only one radio button**. 
    * Type  `"text"` and adding the list attribute will pair the `<input>` with a `<datalist>` element if the list of `<input>` and the id of `<datalist>` are the same.
    * Type  `"submit"` creates a submit button.
* A `<select>` element is populated with `<option>` elements and renders a dropdown list selection.
* A `<datalist>` element is populated with `<option>` elements and works with an `<input>` to search through choices.
* A `<textarea>` element is a text input field that has a customizable area.
* When a Form is **submitted**, the name of the fields that accept input and the value of those fields are sent as name=value pairs.

## Forms Validation

* HTML Forms allow you to specify different kinds of validation for your input fields to make sure that data is entered correctly before being submitted
* **Client-side validations** happen in the browser before information is sent to a server.
    * It save us time from having to send information to the server and wait for the server to respond.
* We can **add values to attributes** to validate the form:
    * Adding the `required` attribute to an input related element will validate that the input field has information in it.
    * A value to the `min` attribute of a number input element will validate an acceptable minimum value.
    * A value to the `max` attribute of a number input element will validate an acceptable maximum value.
    * A value to the `minlength` attribute of a text input element will validate an acceptable minimum number of characters.
    * A value to the `maxlength` attribute of a text input element will validate an acceptable maximum number of characters.
    * A **regex** to `pattern` matches the input to the provided regex.
* If validations on a Form do not pass, the user gets a message explaining why and the Form cannot be submitted.



