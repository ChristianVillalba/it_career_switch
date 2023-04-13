# Bootstrap 4

* **Bootstrap** is a **framework**
* It integrates with HTML to create stylized websites that adapt the **layout** to users’ screen sizes
* To incorporate Bootstrap into a project:
    * Download the source code itself
    * CDN: copy the Content Delivery Network into the HTML file
```html
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS for styling and layout-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
```

### Intro to the Grid
* Bootstrap simplifies the layout of a website using a grid system.
* Containers are the basis of Bootstrap’s grid

### Bootstrap Containers
* Bootstrap uses a grid system based on CSS Flexbox which
* It organizes content in **rows or columns**
* Using the Bootstrap grid also allows for **responsive design**
    * A website’s layout can change based on the user’s screen size.
[Bootstrap: Grid System Documentation](https://getbootstrap.com/docs/4.1/layout/grid/)

### Rows
* Rows are nested within containers
* We can add as many rows as we want inside a container
* A row will take up the entire width of its parent container
* To create a row:
```html
<div class="container">
  <div class="row">
  </div>
</div>
```
