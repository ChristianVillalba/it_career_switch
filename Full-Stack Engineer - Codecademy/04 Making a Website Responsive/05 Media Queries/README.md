# Review: Media Queries
______
______

Change the way a website appears on different screens with media queries and breakpoints:

* **Responsive website**: a website responds to the size of the screen it’s viewed on.
* You can write media queries to help with different screen sizes.
* Adding the viewport meta tag to our code allows us to control the width and scaling of the viewport so that it’s sized and scaled correctly on all devices.
     * `<meta name="viewport" content="width=device-width, initial-scale=1" />`
* Media queries require media features. Media features are the conditions that must be met to render the CSS within a media query.
* Media features can detect many aspects of a user’s browser, including the screen’s width, height, resolution, orientation, and more.
* The **and operator** requires multiple media features to be true at once.
* A **comma separated list** of media features only requires one media feature to be true for the code within to be applied.
* The **best practice** for identifying where media queries should be set is by resizing the browser to determine where the content naturally breaks. Natural breakpoints are found by resizing the browser.