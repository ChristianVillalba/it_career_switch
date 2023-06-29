# FLEXBOX

The flexbox is a tool that greatly simplifies how to position elements.     
There are twwo important components to a flexbox layout:
* **Flex containers**  
* **Flex items**

A **flex container** is an element on a page that **contains flex items**.      
All direct child elements of a flex container are **flex items**.       
This distinction is important because some of the properties you will learn in this lesson apply to flex containers while others apply to flex items.      

To designate an element as a **flex container**:
* Set the element’s `display: flex ¦ inline-flex`.
* Once an item is a flex container, there are several properties we can use to specify how its children behave:
    * `justify-content: ...` to position the **items horizontally**
        * `flex-start` — all items will be positioned in order, starting from the left of the parent container, with no extra space between or before them.
        * `flex-end` — all items will be positioned in order, with the last item starting on the right side of the parent container, with no extra space between or after them.
        * `center` — all items will be positioned in order, in the center of the parent container with no extra space before, between, or after them.
        * `space-around` — items will be positioned with equal space before and after each item, resulting in double the space between elements.
        * `space-between` — items will be positioned with equal space between them, but no extra space before the first or after the last elements.  
    * `align-items: ...` **to space flex items vertically**
        * `flex-start` — all elements will be positioned at the top of the parent container.
        * `flex-end` — all elements will be positioned at the bottom of the parent container.
        * `center` — the center of all elements will be positioned halfway between the top and bottom of the parent container.
        * `baseline` — the bottom of the content of all items will be aligned with each other.
        * `stretch` — if possible, the items will stretch from top to bottom of the container (this is the default value; elements with a specified height will not stretch; elements with a minimum height or no height specified will stretch).
    * `align-self: ...` apply to individual items. **flex items vertically**.
        * This property accepts the same values as **align-items** for the specific item.
        * Values  `flex-start | flex-end | center | baseline | stretech`
    * `flex-grow` — allows us to specify if items should grow to fill a container and also which items should grow proportionally more or less than others.
    * `flex-shrink` — specify which elements will shrink and in what proportions
    * `flex-basis` — specify the width of an item before it stretches or shrinks
    * `flex: ...` — allows you to declare ` flex-grow`, ` flex-shrink`, and ` flex-basis` all in one line.
        * Note: *The **flex property** is different from the **flex value** used for the display property*.
        * 3 values: flex-grow, flex-shrink, and flex-basis
        * 2 values: (2 int) flex-grow and flex-shrink
        * 2 values: (1 int 1 units) flex-grow and flex-basis
    * `flex-wrap: ...` we might want flex items to move to the next line when necessary. instead of shrink to fit its container.
        * `wrap` — if don’t fit into a row will move down to the next line
        * `wrap-reverse` — but the order of rows within a flex container is reversed (last child wild be on first row)
        * `nowrap` — prevents items from wrapping. Default value.
    * `align-content: ...`  to align a flex container’s lines within it when there is extra space in the cross-axis;
        * It **requieres** `flex-wrap: wrap;` 
        * *Note: this property has **no effect** when the flexbox has **only a single line**.*  
        * Values  `flex-start | flex-end | center | space-between | space-around | stretech (default)`
    * `flex-direction: ...`  with the value of column, the flex items will be ordered vertically, not horizontally
        * `row` — elements will be positioned from left to right across the parent element starting from the top left corner (default).
        * `row-reverse` — elements will be positioned from right to left across the parent element starting from the top right corner.
        * `column` — elements will be positioned from top to bottom of the parent element starting from the top left corner.
        * `column-reverse` — elements will be positioned from the bottom to the top of the parent element starting from the bottom left corner.
    * `flex-flow:...` declare both the  **flex-direction** & **flex-wrap** properties in one line
        * 2 values: flex-direction and flex-wrap
        * All values for flex-direction and flex-wrap are accepted.
* **Nested Flexboxes**       
    * It is also possible to position flex containers inside of one another
