# Algorithms


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


### Asymptotic Notation
* In computer science, we define how **efficient** a program is by its **runtime**.
* **Asymptotic notation**, we calculate a program’s runtime by looking at how many instructions the computer has to perform based on the size of the program’s input. 
    * That examining step is the same regardless of the language used, or the CPU that’s performing the calculation
*  In asymptotic notation, we define the size of the input as N.
    * I may be looking through a collection of 10 elements, or 100 elements, but we only need to know how many steps are performed relative to the input so N is used in place of a specific number. 
    * If there is a second input, we may define the size of that input as M.
* There are varieties of asymptotic notation that focus on different concerns.
    *  Typically programmers will focus on the worst case scenario so there is an upper bound of runtime to communicate. It’s a way of saying “things may get this bad, or slow, but they won’t get worse
* The different common runtimes from fastest to slowest are: Θ(1), Θ(log N), Θ(N), Θ(N log N), Θ(N2), Θ(2N), Θ(N!).
    * We use big Omega (Ω) to describe the best-case running time of a program.
    * We use big O (O) to describe the worst-case running time of a program.

### Introduction to Sorting Algorithms
* Bubble sort is an introductory sorting algorithm that iterates through a list and compares pairings of adjacent elements.
* According to the sorting criteria, the algorithm swaps elements to shift elements towards the beginning or end of the list.
* The bubble sort algorithm swaps elements if the element on the left is larger than the one on the right.
* We implement the algorithm with two loops.
    * The first loop iterates as long as the list is unsorted and we assume it’s unsorted to start.
    * The process repeats until the largest element makes its way to the last index of the list. The outer loop runs until no swaps are made within the inner loop.

### MERGE SORT
* Merge sort’s “killer app” was the strategy that **breaks the list-to-be-sorted into smaller parts** 
    * Sometimes called a divide-and-conquer algorithm.
* In a divide-and-conquer algorithm, the data is continually broken down into smaller elements until sorting them becomes really simple.
* Merge sorting takes two steps: 
    * Splitting the data into “runs” or smaller components, 
    * The re-combining those runs into sorted lists (the “merge”).

* An almost-sorted list will take the same amount of time as a completely out-of-order list.    
    * This is acceptable because the worst-case scenario, where a sort could stand to take the most time, is as fast as a sorting algorithm can be.
    * This means the worst-case space complexity of merge sort is O(N).

### Quicksort
* Quicksort is an efficient recursive algorithm for sorting arrays or lists of values. 
* The algorithm is a comparison sort
    * The values are ordered by a comparison operation such as `>` or `<`.
* Quicksort uses a divide and conquer strategy, breaking the problem into smaller sub-problems until the solution is so clear there’s nothing to solve.
* We choose a single pivot element from the list. Every other element is compared with the pivot, which partitions the array into three groups.
    * A sub-array of elements smaller than the pivot.
    * The pivot itself.
    * A sub-array of elements greater than the pivot.
* The process is repeated on the sub-arrays until they contain zero or one element. Elements in the “smaller than” group are never compared with elements in the “greater than” group
    *  If the smaller and greater groupings are roughly equal, this cuts the problem in half with each partition step










