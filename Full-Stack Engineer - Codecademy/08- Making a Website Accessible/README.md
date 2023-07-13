# Making a Website Accessible

* **Accessibility** refers to designing devices, products, and environments such that individuals with disabilities or sensory impairments can successfully use the device or product.
* **Digital Accessibility** refers specifically to digital media
* Some examples include (but are not limited to)
    * Screen readers that parse a website for a user with visual impairments
    * Videos on websites are closed-captioned for individuals with hearing impairments
    * Images include “alt text” for individuals with visual impairments
    * Websites must be navigable by keyboard for users who may not be able to operate a mouse    
    (ie., navigating using the “Tab” on a keyboard)

## Accessible Design:

* The keys to building a more visually inclusive Web are:
    * Using contrast so our text and colors provide better visual cues
    * Using correct font size so our content is legible
    * Creating user interfaces that are enhanced by, but not dependent on, color

## Accessibility

Using ARIA roles and properties, alt attributes, and semantic elements    
is a simple way to make our website accessible to visually-impaired Internet users.
* Using **semantic HTML elements** whenever possible (such as `<header>` instead of `<div id="header">`) will allow screen reader users to navigate your website more efficiently.
* The **role attribute** is used to communicate information about the role of specific elements.
* `role="presentation"` allows a screen reader to skip markup elements that don’t directly contain useful information.
* `aria-label` and other ARIA properties can be used to help users perceive information that is communicated visually but not through text.
* The **alt attribute** should be added to every image element (and all other elements that support it) instead of aria-label. When used, its value should be a useful description of the image.
<br>

* **ARIA roles** provide semantic meaning to content, allowing screen readers and other tools to present and support interaction with an object.     
`<div id="code-editor" role="note">`
    * ARIA Role: Main
        * It can only be used once
        * `<main role="main">`
    * ARIA Role: Presentation
        * skip reading unnecessary elements (ol, li)
        * `<ol role="presentation">`
    * ARIA Properties
        * ARIA properties are attributes that you can add to HTML elements. 
        * The property aria-label gives the screen reader additional information to read out loud to the user.
        * `<p aria-label="Artist">Armand Cabrera, 2010</p>`
        * `aria-labelledby` must match the unique id of its correspoding label
* **Alt Attribute** HTML elements have a built-in attribute called alt that works like aria-label but has additional functionality.
    * The alt attribute is used to describe an image (or several other elements). 
    * A screen reader will read the value of the alt attribute out loud
    * `<img src="#" alt="a kitten snuggling a puppy"/>`

* Notes:
    * `16px` : is the standard font size for most modern web browsers
    * `<aside>`to provide complementary content to the web page
    * **WAI-ARIA**: define regions of a web page
    * Recommendation:  use real text on a website rather than text embedded within graphics:
        * Screen readers can transform real text int voice-over.
        * It's less tacing on the browser to load text than requeesting large images from a server
        * Users can scale or magnify real text for better legibility without losing img quality.
    * `<main>` should wrap the content unique to a given webpage
    * `<artivle>` & `<section>` can be used to give semantic meaning to a region of a web page
    * `<aside>` provides complementary content to the website or region it is cointaied in
    * `nav` is used to group navigational items (menu, table of content and indexes)

## External links

* [An introduction to screen readers - AbilityNet UK](https://abilitynet.org.uk/factsheets/introduction-screen-readers?psafe_param=1&gclid=CjwKCAjwwb6lBhBJEiwAbuVUSgh-b34vtmMUKh7v85_z798ndrOHfAaNfKN7PKoRI2h6ADwuIr3VnRoCOKgQAvD_BwE)
* [Setting Up and Using Screen Readers - Codecademy](https://www.codecademy.com/article/how-to-setup-screen-reader)
* [A message to web developers, from a screen reader user - Article (UK)](https://business.scope.org.uk/article/message-to-web-developers-from-a-screen-reader-user?gclid=CjwKCAjwwb6lBhBJEiwAbuVUSl2MpaSKUsWLdLnnIO7EzVDnSwxeAKujxK-zMJIHWibcWIwgFbH7XhoCGuEQAvD_BwE)




