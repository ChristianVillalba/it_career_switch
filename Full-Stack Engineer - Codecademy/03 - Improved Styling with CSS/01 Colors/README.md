# Colors in CSS

There are four ways to represent color in CSS:

* **Named colors**
    * There are more than 140 named colors, which you can 
    * [Review named colors on MDN (Documentation)](https://developer.mozilla.org/en-US/docs/Web/CSS/named-color)  
* **Hexadecimal or hex colors**:
    * Hexadecimal is a number system that has sixteen digits, 0 to 9 followed by “A” to “F”.
    * Hex values always begin with `#` and specify values of red, blue, and green using hexadecimal numbers      
    eg: `#23F41A`.
    * Six-digit hex values with duplicate values for each RGB value can be shorted to three digits.
* **RGB**
    * RGB colors use the `rgb()` syntax with one value for red, one value for blue and one value for green.
    * RGB values range from 0 to 255         
    eg: `rgb(7, 210, 50)`.
* **HSL**
    * HSL stands for hue (the color itself), saturation (the intensity of the color), and lightness (how light or dark a color is).
    * Hue ranges from 0 to 360 and saturation and lightness are both represented as percentages      
    eg: `hsl(200, 20%, 50%)`.
    * **HSLA**
        * You can add opacity to color in RGB and HSL by adding a fourth value, **a**       
        * The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (not transparent at all)         
        eg :`hsla(0, 100%, 50%, 0.5)`
