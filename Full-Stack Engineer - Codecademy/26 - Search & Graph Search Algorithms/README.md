# Search & Graph Search Algorithms

* **Binary Search**
    * When given a sorted array of data, binary search is a way of searching through that data to find an element in O(log n) time using a divide and conquer approach. 
    * It doesn’t require you to look through the entire array in a linear way, which would have a linear big O runtime of O(n).
* **Binary Search Trees**
    * Binary search trees are a type of tree data structure with the added condition that each element to the left of a node must be less than that parent node, and each element to the right of a node must be greater than that parent node. 
    * Each left and right subtree is also itself a binary search tree, which makes searching for elements more efficient.

### BINARY SEARCH: CONCEPTUAL
* In each iteration, we cut the list in half. The time complexity is O(log N)
* Binary Search Trees
    * A BinaryTree class containing value, left and right child nodes and a depth
* Traversing a Binary Tree
    * There are two main ways of traversing a binary tree: breadth-first and depth-first.

### GRAPH SEARCH: CONCEPTUAL
* You can use a **graph search algorithm** to traverse the entirety of a graph data structure to **locate a specific value**.
* Vertices in a graph search include a “visited” list to keep track of whether or not each vertex has been checked
* Depth-first search (**DFS**) and breadth-first search (BFS) are two common approaches to graph search
    * **DF**S, which employs either recursion or a stack data structure, is useful for determining whether a path exists between two points
    * BFS, which generally relies on a queue data structure, is helpful in finding the shortest path between two points
    * The runtime for graph search algorithms is O(vertices + edges)
* There are three common traversal orders which you can apply with **DFS** to generate a list of all values in a graph: 
    * Pre-order 
    * Post-order
    * Reverse post-order



