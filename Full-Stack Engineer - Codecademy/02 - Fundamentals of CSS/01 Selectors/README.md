# Selectors - CSS 

How to select HTML elements with CSS and apply styles to them:

* **CSS can select** HTML elements by **type, class, ID, and attribute**
* All elements can be selected using the universal selector.
* An element can have different states using the pseudo-class selector.
* Multiple CSS classes can be applied to one HTML element.
* **Classes** can be **reusable** 
* **IDs** can only be **used once**
* Hierarchy:
    * **IDs** are more specific than **classes** 
    * **Classes** are more specific than **type**. That means 
    * IDs will override any styles from a class
    * Classes will override any styles from a type selector.
* **Multiple selectors** can be chained together to select an element. 
    * This raises the **specificity** but can be necessary.
    * Nested elements can be selected by separating selectors with a space.
* **Multiple unrelated selectors** can receive the same styles by separating the selector names with commas.
