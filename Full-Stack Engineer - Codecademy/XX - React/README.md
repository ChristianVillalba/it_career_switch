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
    * Props **evaluate** to an Object data type.
    * Props **are accessible** in a Component via props Objects (key-values).
        * **Porps names** are **keys**
        * **Props values** are **values** (passed via JSX)
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

## Stateful and Stateless Components

* **Stateful Component:** Component that holds some state. 
* **Stateless components:** by contrast, have no state. 
* Note that both types of components can use props.
* Changing Props and State
    * Props:
        * A component should **never change** its own props directly
        * A **parent component** should change the props.
    * State:
        * A component **keeps track** of its own **state** and can **change** it at any time
* Passing State Change Functions as Props
    * If a React parent component defines a function that **changes its state**:
        * That function can be passed to a child component
        * And called within the component to updating the parent component’s state
        ```javascript
        function Name() {
        const [name, setName] = useState('');

        const handleNameChange = (e) => {
            setName(e.target.value);
        }

        return (
            <div>
            <input onChange={handleNameChange} />
            <p>{name}</p>
            </div>
        );       
        }
        ```
* Event Handlers and State in React
    * **Event handler functions** in React are often **used to update state**.
        * Functions often receive an event as an argument, which is used to update state values correctly.
        ```javascript
        function MyComponent() {
            const [ text, setText ] = useState("");

            const handleChange(event) => {
                setText(event.target.value);
            }
            
            return (
                <div>
                <input onChange={handleChange} value={text} />
                <p>You typed {text}</p>
                </div>
            );
        }
        ```
* Using Stateless Updaters and Presenters   
    * A common React programming pattern:
        * Use a **parent stateful component** to manage state and define state-updating methods.
            * Stateful Component: initialization of **state** using the **useState hook**
        * Then, it will render **stateless child components**.
        * One or more of those child components will be responsible for **updating** the parent state
            * Via methods passed as props.
        * One or more of those child components will be responsible for **displaying** that state
        * In order for a **statelss child** to update the state of its parent:
            * A **parent** must define a function that contains the state setter function provided by the **useState** hook. 
    
        
## Component Lifecycle Methods

* The three major phases of a component’s lifecycle:
    1. Mounting
        * The component is being initialized and put into the DOM for the first time.
        * The `constructor`, `render()`, and `componentDidMount()` are called during this phase
    2. Updating
        * The component updates as a result of changed state or changed props. 
        * In this phase, `render()` and `componentDidUpdate()` are called.
    3. Unmounting
        * The component is being removed from the DOM.
        * It is a good time to clean things up. `componentWillUnmount()` is called here. 
* Extra notes:
    * set up side-effects when a component mounts, use componentDidMount()
    * presentational components return statements containg JSX code 









