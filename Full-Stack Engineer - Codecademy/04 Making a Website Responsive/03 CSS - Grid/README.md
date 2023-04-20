# GRID
______
______

## GRID: ESSENTIALS
______

We can elegantly lay out elements on a web page using CSS.      
The **Box Model** and **Display & Positioning** explain some possible ways to style layout.

The grid can be used to layout entire web pages.
  * Flexbox is mostly useful for positioning items in a one-dimensional layout.
  * CSS grid is most useful for two-dimensional layouts

To turn an HTML element into a grid container: element’s `display` property:
  * `grid` — for a block-level grid.
  * `inline-grid` — for an inline grid.

We can assign other properties to lay out the grid to suit your needs:
* `grid-template-columns`
  * Define the columns of our grid
  * By default, grids contain only one column
  * We need to explicitly define the number of rows and columns in our grid.
  *  When using percentages in these two properties:
     * Rows are defined as a percentage of the grid’s height
     * Columns are defined as a percentage of its width.
  ```css
  .grid {
  display: grid;
  width: 500px;
  grid-template-columns: 20px 40% 60px;
  }
  ```
* `grid-template-rows`
  * To specify the number and size of the rows
  * It is almost identical to grid-template-columns
  ```css
  .grid {
  display: grid;
  width: 1000px;
  height: 500px;
  grid-template-columns: 100px 200px;
  grid-template-rows: 10% 20% 600px;
  }
  ```
* `grid-template`
  * It can replace `grid-template-rows` & `grid-template-columns`
  * The values before the slash will determine the size of each row
  * The values after the slash determine the size of each column
  ```css
  .grid {
    display: grid;
    width: 1000px;
    height: 500px;
    grid-template: 200px 300px / 20% 10% 70%;
  }
  ```
* Fraction [as unit]
  * By using the `fr` unit, we can define the size of columns and rows as a fraction of the grid’s length  
  ```css
  .grid {
    display: grid;
    width: 1000px;
    height: 400px;
    grid-template: 2fr 1fr 1fr / 1fr 3fr 1fr;
  }
  ```
* Repeat [function]
  * The repeat() function was created specifically for CSS Grid
  * The properties that define the number of rows and columns in a grid can take a function as a value
  * The **repeat function** will duplicate the specifications for rows or columns a given number of times.
  * Repeat is particularly useful with `fr`
     * eg: `repeat(5, 1fr)` would split your table into five equal rows or columns.
  * The second value can have multiple values
  ```css
  .grid {
    display: grid;
    width: 300px;
   grid-template: repeat(3, 1fr) / 3fr 50% 1fr;
  }
  ```
* Minmax [function]
  * It prevents a row or column from getting too big or too small
  * To use it, we need a grid with a variable width
  ```css
  .grid {
    display: grid;
    grid-template-columns: 100px minmax(100px, 500px) 100px;
  }
    /* the first and third columns will always be 100 pixels  */
    /* The second column, however, will vary in size as the overall grid resizes (between 100px and 500px) */
  ```
* Grid Gap
  * `row-gap` & `column-gap` : put blank space between every row and column in the grid
  * `gap` : that can set the row and column gap at the same time
    * First value: distance between rows
    * Second value:  distance between columns
    ```css
    .grid {
      display: grid;
      width: 320px;
      grid-template-columns: repeat(3, 1fr);
      /* row-gap: 20px; */
      /* column-gap: 5px; */
      gap: 20px 5px;
    }
    ```  
* Grid Items
  * We can drastically change the look of our grid by making grid items take up more than one row and one column
    * Previously, the items placed in the grid have always taken up exactly one square
  * By manipulating both the parent and the child elements, we can create beautiful layouts with ease
* Multiple Row Items
  * `grid-row-start` and `grid-row-end` : make single grid items take up multiple rows
    * Remember, we are no longer applying CSS to the outer grid container
    * We’re adding CSS to the elements sitting inside the grid
  * The value for `grid-row-start` should be the row at which you want the grid item to begin
  * The value for `grid-row-end` should be one greater than the row at which you want the grid item to end
    ```css
    .item {
      grid-row-start: 1;
      grid-row-end: 3;
      /* .item will take up two rows in the grid, rows 1 and 2. */
    }
    ```
* Grid Row
  * `grid-row` as shorthand for `grid-row-start` and grid-row-end`
    ```css
    .item {
      grid-row-start: 4;
      grid-row-end: 6;
    }
    /* same as */
    .item {
    grid-row: 4 / 6;
    }
    ```
* Grid Column
  * `grid-column-start`, `grid-column-end` and `grid-column` work identically to the row properties.
* Span
  * Inside grid-row or grid-column properties
  * we can use the keyword `span` to start or end a column or row
  * It avoids off-by-one errors (miscalculating the ending grid line)
    ```css
    .item {
    grid-column: 4 / span 2;
    /* item element should begin in column four and take up two columns of space */
    /* item would occupy columns four and five */
    }
    ```
* Grid Area
  * We can refactor even more using the property `grid-area`
  * It will set the starting and ending positions for both the rows and columns
  * It takes four values separated by slashes
    1.  grid-row-start
    2.  grid-column-start
    3.  grid-row-end
    4.  grid-column-end
    ```css
    .item {
      grid-area: 2 / 3 / 4 / span 5;
    }
    ```
______
______

## GRID: ADVANCED
______

* `grid-template-areas`
  * It allows you to name sections of your web page to use as values
      *  In the grid-row-start, grid-row-end, grid-column-start, grid-column-end, and grid-area properties.
  * This property is declared on grid containers.
  ```html
  <div class="container">
    <header>Welcome!</header>
    <nav>Links!</nav>
    <section class="info">Info!</section>
    <section class="services">Services!</section>
    <footer>Contact us!</footer>
  </div>
  ```
  ```css
  .container {
    display: grid;
    max-width: 900px;
    position: relative;
    margin: auto;
    grid-template-areas: "header header"
                         "nav nav"
                         "info services"
                         "footer footer";
    grid-template-rows: 300px 120px 800px 120px;
    grid-template-columns: 1fr 3fr;
  }

  header {
   grid-area: header;
  }
  nav {
   grid-area: nav;
  }
  .info {
   grid-area: info;
  }
  .services {
   grid-area: services;
  }
  footer {
   grid-area: footer;
  }
  ```
* Overlapping Elements  
  *  `grid-area` property with grid row names is the easiest way to overlap elements
  Justify Items
  We have referred to “two-dimensional grid-based layout” several times throughout this course.

  There are two axes in a grid layout — the column (or block) axis and the row (or inline) axis.

The column axis stretches from top to bottom across the web page.

The row axis stretches from left to right across the web page.

In the following four exercises, we will learn and use properties that rely on an understanding of grid axes.

justify-items is a property that positions grid items along the inline, or row, axis. This means that it positions items from left to right across the web page. This property is declared on grid containers.

justify-items accepts these values:

start — aligns grid items to the left side of the grid area
end — aligns grid items to the right side of the grid area
center — aligns grid items to the center of the grid area
stretch — stretches all items to fill the grid area
There are several other values that justify-items accepts, which you can read about on the Mozilla Developer Network. The definitions for these values can also be found in the documentation. It is important to note that the page with the definitions includes some values that are not accepted in CSS Grid layout.
