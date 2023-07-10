# REACT

* React is a modular, scalable, flexible, and popular front-end framework.
* **JSX** is a syntax extension for JavaScript which allows us to treat **HTML as expressions**.
    * They can be stored in variables, objects, arrays, and more
    * JSX needs to be comiled bofore it can be read by a web browser.
* **JSX elements** can have attributes and be nested within each other, just like in HTML.
* JSX must have exactly one outer element, and other elements can be nested inside.
* `createRoot()` from react-dom/client can be used to create a React root at the specified DOM element.
* A React root’s `render()` method 
    * It can be used to render JSX on the screen.
    * It only updates DOM Elements that have changed using the virtual DOM.
<br/>

* Updating the **DOM** is not time efficient, The **virtual DOM** tries to solve this.
    * A Virtual DOM object will be updated if any jsx elements renders
    * A Virtual DOM object cant't directly affect HTML
    * A Virtual DOM can update much fater than regular DOM Obj
<br/>

* Steps when a JSX Element renders: 
    1. A JSX element renders
    2. The entire virtual DOM gets updated
    3. The virtual DOM is compared to what it looked like before it updated to figure out which objects have changed.
    4. The changed objects, and the changed objects only, get updated on the real DOM.
    5. Changes on the real DOM cause the screen to change.

## React Components
     
* **React applications** are made up of **components**.
    * Components are responsible for rendering pieces of the user interface.
* **React and reactDOM** must be **imported** to create components and render them, .
* **React components** can be defined with Javascript functions to make **function components**.
    * Function component names must start with a capitalized letter, and Pascal case is the adopted naming convention.
    * Function components must return some React elements in JSX syntax.
* React components can be **exported and imported** from file to file.
* A React component can be used by calling the component name in an HTML-like self-closing tag syntax.
* Rendering a React component requires using `.createRoot()` to specify a root container and calling the `.render()` method on it.
<br/>

* **Function components** can return multiple JSX lines by nesting the elements in a parent element.
    * Basically a factory that mass-produces React Components according to a blueprint.
* **Variable attributes** can be used inside of a React component with JavaScript injections.
* React components 
    * Support logic by putting the **logic statements** above the return statements.
    * They can **conditionally return JSX elements** by putting **conditional statements** inside of the components.
    * **Respond to events** by defining event handlers and passing them to the JSX elements.

<br/>

* A React application can contain **multiple components**.
    * They  can interact with each other by returning instances of each other.
    * Components interacting allows them to be **broken into smaller components**, stored into separate files, and **reused** when necessary.

## Props

* We can pass a **prop** by giving an attribute to a component instance.
    * If there are not props passed to a Component:
        * The component will use default values for any missing props.
* In this lesson I learned:
    * Accessing a passed-in prop via `props.propName`.
    * Displaying a prop.
    * Using a prop to make decisions about what to display.
    * Defining an event handler in a function component.
    * Passing an event handler as a prop.
    * Receiving a prop event handler and attaching it to an event listener.
    * Naming event handlers and event handler attributes according to a convention.
    * Accessing `props.children`.
        * It will **return everything** between a component's opening and closing tags
    * Assigning default values to props.