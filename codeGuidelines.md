# Code guidelines

## Gerneal 

We use camelCase writing our code<br>
Example for camelCase: $variableOne = "foo"; functionDoSomething();

Indentation: 3 spaces<br>
Charset: UTF-8

Make sure to leave an empty new line at the end of every page!

## Everything we code must be published through git

### If you want to use git make sure you
1. Open your terminal/console 
2. Navigate to the folder where you have the project files ```cd GroupF-term1```
### To commit your changes and push your files
1. git add . (This command adds all the files to git)
2. git commit -m "MESSAGE" (message is necessary, always give information what you have done)
3. git push (push the upload to all)
### To get the newest files from git
4. git pull

# HTML & PHP

## HTML

### Rules
Make sure that you follow the rules and add all necessary attributes 
for example:
```<img src="" alt="">```

### Validate your file befor pushing

* Use the following validator to validate your HTML: https://validator.w3.org/#validate_by_input

* Use the following validator to validate your CSS:  https://jigsaw.w3.org/css-validator/#validate_by_input

### Comments in HTML code

Stick to the following scheme for the sections

``` HTML
<main>
   <!-- heroBanner --> 
   <section class="heroBanner">

   </section>
   <!-- findUs -->
   <section class="findUs">
      
   </section>
   <p>TESTI TEST</p>
</main>
```
 
## PHP

TODO 

## CSS

All CSS must be in the styles/styles.css file
* Follow the scheme for the style.css file
* Our CSS is in groups, we have **media queries**, **HTML tags**, **classes**, **IDs**

### CSS code example
```CSS
/* Media queries */
@font-face {
   font-family: CircularStd;
   src: url(fonte\CircularStd-Black.otf);
}


/* HTML Tags */
header {
   background-color: blueviolet;
   grid-column: 2/7;
}

main {
   background-color: aqua;
   grid-column: 2/7;
}

footer {
   background-color: yellowgreen;
   grid-column: 2/7;
}

/* Classes */
.gridContainer {
   display: grid;
   grid-template-columns: repeat(7,1fr);
}

/* IDs */
#logo {
   height: 300px;
}
```
