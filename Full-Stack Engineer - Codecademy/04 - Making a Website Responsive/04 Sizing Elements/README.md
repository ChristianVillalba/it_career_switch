# SIZING ELEMENTS
______
______

## Relative Measurements

* Content on a website can be sized relative to other elements on the page using relative measurements.
* `em` (16px) sizes font relative to the font size of a parent element.
* `rem`(16px by default) sizes font relative to the font size of a root element.
    * Adaptable & reliable
    * Easier to debug
* `%` Percentages are commonly used to size box-model features
    * eg: width, height, padding, or margin of an element
* `%` to size width and height, child elements will be sized relative to the dimensions of their parent
    * The parent dimensions must first be set
* `min-width` & `max-width`: set The minimum and maximum width of element
* `min-height` & `max-height`: set The minimum and maximum height of element
* When the height/width of an **image or video** is set:
    * Its width/height (the opposite value) can be set to `auto`: the media scales proportionally.
    * Reversing these two properties and values will also achieve the same result.
* A **background image** of an HTML element will scale proportionally when its `background-size` property is set to `cover`
```css
  body {
    background-image: url('#');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
```
