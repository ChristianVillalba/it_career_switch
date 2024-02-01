# Redux
* **Redux** is a **state management library** that follows a pattern known as the Flux architecture.
    *  In ***Flux and Redux***, shared information is consolidated within a single object instead of being scattered across individual components.
* The patterns and tools provided by Redux make it easier to understand when, where, why, and how the **state** in your application is being updated, and how your application logic will behave when those changes occur.
* The patterns and tools provided by Redux make it easier to understand when, where, why, and how the state in your application is being updated, and how your application logic will behave when those changes occur.
* Redux helps separate **the state, the view, and actions** by requiring that the state be managed by a single source.
* **State** is the current information behind a web application.
* **An action** is an object describing an event in the application. It must have a type property and it typically has a payload property as well.
* **A reducer** is a function that determines the application’s next state given a current state and a specific action. It returns a default initial state if none is provided and returns the current state if the action is not recognized
* A reducer must follow these three rules:
    * They should only calculate the new state value based on the existing state and action.
    * They are not allowed to modify the existing state. Instead, they must copy the existing state and make changes to the copied values.
    * They must not do any asynchronous logic or other “side effects”lo
* **A reducer** must be a pure **function**, and it must update the **state immutably**.
* **The store** is a **container for state**, it provides a way to dispatch actions, and it calls the reducer when actions are dispatched. 
    * Typically there is only **one store** in a Redux application.

### Strategies for Complex State
* Redux really shines when used in applications with many features and a lot of data
* The `action.payload` property is used to hold additional data that the reducer might need to carry out a given action. 
    * The name `payload` is simply a convention, and its value can be anything
* The spread syntax `...` and array methods such as `.map()`, `.slice()`, and `.filter()` can be used to immutably update the state of a complex app.
* Reducer composition is a design pattern for managing a Redux store with multiple slices.
* The ***root reducer*** delegates actions to slice reducers that are responsible for updating only their assigned slice of the store’s state. 
    * The root reducer then reassembles the slices into a new state object.
* `combineReducers()` is a method provided by the redux library that accepts a collection of reducer functions and returns a `rootReducer` that implements the reducer composition pattern.
* In a Redux application, slice reducers are often written in separate files. This pattern is known as **Redux Ducks**.

### REDUX MIDDLEWARE AND THUNKS
* Tools necessary to write **asynchronous logic** that interacts with your Redux store.
* **Thunks** refer to a middleware that allows the dispatching of asynchronous actions. 
    * Thunks are functions that wrap an expression to be evaluated later
* The **three promise lifecycle** actions: pending, fulfilled, and rejected
* `createAsyncThunk()`, which abstracts the process of handling promise lifecycle states according to best practices/common design paradigms
* Created action creators using `createAsyncThunk()`
* Made your reducers respond to pending/fulfilled/rejected promise lifecycle actions by supplying the extraReducers property to createSlice().




