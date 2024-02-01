# React

### React Programming Patterns
* Identified that the original component needed to be refactored: it handled calculations/logic and presentation/rendering.
* Created a container component containing all the stateful logic.
* Created a function that calls the state setter method provided by useState().
* Created and exported presentational components containing only JSX.
* Imported the presentational components into the container component.
* Used the presentational components in the return statement of the container component.
* Passed state and functions used to change state as props to the rendered presentational components.

### React Routing
* Routing is the process by which a web application uses the current browser URL to determine what content to show a user. 
* By organizing an application’s content and displaying only what the user has requested to see, routing allows for rich, engaging, and clear user experiences.
* Installing React Router
    * `npm install --save react-router-dom@6`
* Install react-router-dom and add it to a React application.
* Enable routing by using `RouterProvider` and providing a `router`.
* Creating a router using `createBrowserRouter()`.
* Use `createRoutesFromElements()` to configure a router.
* Use the **Route component** to add static and dynamic routes to an application.
* Use **Link** and **NavLink** components to add links to an application.
* Access the values of URL parameters using React Router’s `useParams` **hook**.
* Create nested routes using Route, Outlet, and relative paths.
* Declaratively redirect users by rendering React Router’s **Navigate** component
* Imperatively redirect users via the `useNavigate` **hook**.
* Access and set the value of query parameters using React Router’s `useSearchParams` **hook**.


### Jest
* Jest a testing framework for JS
* Jest provides the two key ingredients needed for testing:
    * An assertion library: an API of functions for validating a program’s functionality
    * A test runner: a tool that executes tests and provides outputted test summaries 

### React Testing Library (RTL).
* React Testing Library is a UI-layer testing framework that helps us ensure that our React components are rendering and behaving properly.
* The main advantages of RTL over other UI-layer testing frameworks are:
    * It is built explicitly for testing React components.
    * It allows us to test our components in a way that mimics real user interactions.











