# Complex Data Structures
* How to implement complex data structures, such as hash maps, trees and heaps, and when to use them based on the characteristics of your data.


### Hash Maps
* **Hash maps** map **keys** to their related **values**, and are 
* One of the most efficient data structures when it comes to retrieving stored data. * * This is because the key associated with every value added allows for faster retrieval later on.
* **Maps**
* Being a map means relating two pieces of information 
    * but a map also has one further requirement. 
* We don’t really care about the exact sequence of the data. We only care that a given input.
* **Hash Functions**
    * **A hash function** takes a string (or some other type of data) as input and **returns an array index** as output.
    * Our hash map implementation needs to know the size of our array. 
    * hash functions are designed to compress data from a large number of possible keys to a much smaller range
    * ***Hash collision:*** our hash function might produce the same hash for two different keys
* Intro to **Hash Maps**
    * Hash maps are data structures that serve as efficient key-value stores.
    * A **hashing function** takes a key as input and returns an index within the hash map’s underlying array.


### Trees
*  Trees are used for data that has a hierarchical structure, such as a family tree or a computer’s file system. 
* Nodes also store references to zero or more other tree nodes. 
* Data moves down from node to node.
* Trees are often displayed with a single node at the top and connected nodes branching downwards.
* Trees can be both wide and deep, but each node will only ever have at most one parent
* **Binary Search Tree**
* A binary tree is a type of tree where each parent can have no more than two children
    * left child
    * right child
* Further constraints make a binary search tree:
    * Left child values must be lesser than their parent.
    * Right child values must be greater than their parent.
* The constraints of a binary search tree allow us to search the tree efficiently. 
    * At each node, we can discard half of the remaining possible values
* leaf: Nodes which have no children.

### Heaps
* Heaps are used to maintain a maximum or minimum value in a dataset.
* Heaps are commonly used to create a priority queue.
* Heaps tracking the maximum or minimum value are max-heaps or min-heaps. 
    * Think of the min-heap as a binary tree with two qualities:
    * The root is the minimum value of the dataset.
    * Every child’s value is greater than or equal to its parent.
    * we can efficiently retrieve and update the minimum value.

### Graphs
* Graphs are the perfect data structure for modeling networks, 
    * Which make them an indispensable piece of your data structure toolkit.
* They’re composed of: 
    * **nodes**, or vertices, which hold data, 
    * and **edges**, which are a connection between two vertices. 
    * A single node is a *vertex*.
* Graphs have varying degrees of connection.
* The higher the ratio of edges to vertices, the more connected the graph.
* *Path:* A sequence of one or more edges between vertices.
* *Disconnected: *Graph where at least two vertices have no path connecting them
* *Directed:* Graph where travel between vertices can be restricted to a single direction.
* *Cycle:* A path which begins and ends at the same vertex.
* *Adjacency matrix:* Graph representation where vertices are both the rows and the columns. Each cell represents a possible edge.
* *Adjacency list:* Graph representation where each vertex has a list of all the vertices it shares an edge with.

