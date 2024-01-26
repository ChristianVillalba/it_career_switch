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
* Recursion has two fundamental aspects: the base case and the recursive step.   *
