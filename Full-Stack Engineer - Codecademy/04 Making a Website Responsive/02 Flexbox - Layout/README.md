# FLEXBOX

The flexbox is a tool that greatly simplifies how to position elements.     
There are twwo important components to a flexbox layout:
* Flex containers  
* Flex items.

A flex container is an element on a page that contains flex items.      
All direct child elements of a flex container are flex items.       
This distinction is important because some of the properties you will learn in this lesson apply to flex containers while others apply to flex items.      

To designate an element as a flex container:
* Set the element’s display property to flex or inline-flex.
* Once an item is a flex container, there are several properties we can use to specify how its children behave:
    * justify-content: To position the items horizontally
        * flex-start — all items will be positioned in order, starting from the left of the parent container, with no extra space between or before them.
        * flex-end — all items will be positioned in order, with the last item starting on the right side of the parent container, with no extra space between or after them.
        * center — all items will be positioned in order, in the center of the parent container with no extra space before, between, or after them.
        * space-around — items will be positioned with equal space before and after each item, resulting in double the space between elements.
        * space-between — items will be positioned with equal space between them, but no extra space before the first or after the last elements.  
    * align-items: to space flex items vertically
        * flex-start — all elements will be positioned at the top of the parent container.
        * flex-end — all elements will be positioned at the bottom of the parent container.
        * center — the center of all elements will be positioned halfway between the top and bottom of the parent container.
        * baseline — the bottom of the content of all items will be aligned with each other.
        * stretch — if possible, the items will stretch from top to bottom of the container (this is the default value; elements with a specified height will not stretch; elements with a minimum height or no height specified will stretch).
    * flex-grow: allows us to specify if items should grow to fill a container and also which items should grow proportionally more or less than others.
    * flex-shrink: specify which elements will shrink and in what proportions
    * flex-basis
    * flex
    * flex-wrap
    * align-content
    * flex-direction
    * flex-flow
