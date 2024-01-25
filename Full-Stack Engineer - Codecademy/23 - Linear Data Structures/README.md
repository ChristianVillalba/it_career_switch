# Linear Data Structures
* At the backbone of every program or piece of software are two entities: **data and algorithms**. 
    * **Algorithms transform data** into something a program can effectively use. 
    * Therefore, it is important to understand how to structure data so algorithms can maintain, utilize, and iterate through data quickly.
* **Data structures** are the way we are able to **store and retrieve data** (list, dictionaries).
* Data structures handle four main functions:
    * **Inputting information**
    * **Processing information**
    * **Maintaining information**
    * **Retrieving information**
* Different types and use cases for data will be better suited to different manners of inputting, processing, storing, and retrieving. 
    * This is why we have several data structures to choose from… 
    * ...and the ability to create our own

### Choosing the best data structure
* What is the intended purpose for the data? Do any data structures have built-in functionality that is ideally suited for this purpose? Do you want to search, sort, or iterate data in a way in which certain data structures would be better suited than others?
* Do you want or need control over how memory is set aside to store your data? Data structures that use static memory allocation (e.g., stacks or arrays) will manage memory for you and assume a fixed amount of memory upon instantiation with a cap on how much data may be added. Data structures that utilize dynamic memory allocation (e.g., heaps or linked lists) allow you to allocate and reallocate memory within the life of the program. While memory allocation is not something that you’ll need to consider in languages like Python or Javascript (these languages will manage memory for you, regardless of which data structure you use), it is something to bear in mind when working in other languages like C.
* How long will it take different data structures to accomplish various tasks relative to other data structures? Technically, two data structures may both be able to accomplish the same task for you, but one may be quite a bit faster. This consideration, known as runtime will be covered further in depth when you explore all the nifty tricks of asymptotic notation.

### Node
* Contain data, which can be a variety of data types
* Contain links to other nodes. If a node has no links, or they are all null, you have reached the end of the path you were following.
* Can be orphaned if there are no existing links to them

### Linked List Introduction
* Linked lists are one of the basic data structures used in computer science. 
* Are comprised of nodes
* The nodes contain a link to the next node (and also the previous node for bidirectional linked lists)
* Can be unidirectional or bidirectional
* Are a basic data structure, and form the basis for many other data structures
* Have a single head node, which serves as the first node in the list
* Require some maintenance in order to add or remove nodes
* The methods we used are an example and depend on the exact use case and/or programming language being used
* Common operations on a linked list may include:
    * adding nodes
    * removing nodes
    * finding a node
    * traversing (or traveling through) the linked list
* Linked lists typically contain unidirectional links (next node), but some implementations make use of bidirectional links (next and previous nodes).
* **creating and implementing doubly linked lists**
    * Using our Node class to hold the data and links between nodes
    * Implementing a DoublyLinkedList class to handle external operations on the list, like adding and removing nodes
    * Creating an instance of our list, and using the .printList() method to track the changes we made

### Stacks
* Stack is a **linear collection of nodes** that adds (pushes) data to one end of the data structure.
    * Like a queue
* A stack removes data (pops) from the same end of the data structure. 
    * Unlike a queue
    * Think of it as a stack of books, where you can only pick up the top book, and add a new book to the top.
* Stacks are often thought of as a “First In, Last Out” (FILO) data structure — the first book you add to the stack won’t be removed until all other books are removed from the stack.
* Stacks provide three methods for interaction:
    * **Push** - adds data to the “top” of the stackfs
    * **Pop** - returns and removes data from the “top” of the stack
    * **Peek** - returns data from the “top” of the stack without removing it
* Stacks:
    * Contain data nodes
    * Implementations include a linked list or array
    * Can have a limited size
    * Pushing data onto a full stack results in a stack overflow
    * Stacks process data Last In, First Out (LIFO)   * 
