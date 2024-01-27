# Algorithmsjaguar


### Recursion
* Recursion is a strategy for solving problems by defining the problem in terms of itself. 
    * For example, to sum the elements of a list we would take the first element and add it to the sum of the remaining elements.
    * Eg: a queue, we ask the person in front of us to ask the person in front of them how many people do they have in front of them.
* In programming, recursion means a function definition will include an invocation of the function within its own body. 
    * ```
        define function, speller
            if there are no more letters
                print "all done"
            print the first letter
            invoke speller with the given name minus the first letter
        ```
    * We call the function a total of 4 times!
        * function called with “Zoe”
        * function called with “oe”
        * function called with “e”
        * function called with “”
* **A recursive approach** requires the function invoking itself with different arguments.         
* Languages make this possible with **call stacks and execution contexts**.
    * **Stacks**, a data structure, follow a strict protocol for the order data enters and exits the structure: the last thing to enter is the first thing to leave.
    * **Execution contexts** contains the variables within each recursive call.
* Recursion has two fundamental aspects: the base case and the recursive step.
* **Stack Overflow**:
    * A recursive function which has no base case, or a recursive step that does not lead to the base case
* Every recursive problem requires:
    * **Recursive case** – the conditions under which the function will perform an action and call itself.
    * **Base case** – the conditions under which the function returns a value without making any additional calls to itself.