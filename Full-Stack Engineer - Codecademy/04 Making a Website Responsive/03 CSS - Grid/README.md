# GRID ESSENTIALS

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
* Minmax [function]
  * Th
* `grid-template-area`
* `row-gap / column-gap / gap`
* `grid-row-start / grid-row-end`
* `grid-column-start / grid-column-end`
* `grid-area`
