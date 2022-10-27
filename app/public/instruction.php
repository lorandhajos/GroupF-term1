<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OUI</title>
   <link rel="stylesheet" href="style/styles.css">
</head>
<body>
<div class="gridContainer">
   <header>
      <nav></nav>
   </header>
   <main>
      <!-- List of recipes -->
      <section class="recipes">
         <h2>Recipes</h2>
         <div class="recipe first">
            <img src="images/coffeeBeans1.jpg" alt="Steming coffee is being pured from a french press into a glass cup">
            <div class="content">
               <div>
                  <h3>How do I make good french coffee?</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
               <a href="#" class="button">Learn More</a>
            </div>
            <h3>How do I make good french coffee?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="button">Learn More</a>
         </div>
         <div class="line"></div>
         <div class="recipe last">
            <img src="images/croissant2.jpg" alt="Coffee">
            <div class="content">
               <div>
                  <h3>How do I make good french pastry?</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
               <a href="#" class="button">Learn More</a>
            </div>
            <h3>How do I make good french pastry?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="button">Learn More</a>
         </div>
         <div class="line"></div>
      </section>
      <section class="lessonContent">
         <h2>Lessons</h2>
         <div>
            <div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi augue, euismod id purus sed, dignissim dignissim arcu. Nunc facilisis purus a dignissim faucibus.
                  Pellentesque nec semper sapien. Quisque elementum quam metus, sit amet placerat nulla vulputate eu. Sed nec volutpat elit, sed mattis nunc.
                  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inc</p>
               <div class="signUp">
                  <a href="#" class="signupButton">Sign Up</a>
                     </div>
                  </div>
               </div>
            </section>
         </main>
         <footer>
=======
<?php if(!defined("OUI")) exit; ?>
>>>>>>> origin/master

<!-- List of recipes -->
<section class="instruction">
   <h1>Instruction</h1>
   <section class="recipes">
      <h2>Recipes</h2>
      <div class="recipe first">
         <img src="images/coffeeBeans1.jpg" alt="Steming coffee is being pured from a french press into a glass cup">
         <div class="content">
            <div>
               <h3>How do I make good french coffee?</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <a href="#" class="button">Learn More</a>
         </div>
      </div>
      <div class="recipe last">
         <img src="images/croissant2.jpg" alt="Coffee">
         <div class="content">
            <div>
               <h3>How do I make good french pastry?</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <a href="#" class="button">Learn More</a>
         </div>
      </div>
   </section>
   <section class="lessonContent">
      <h2>Lessons</h2>
      <div>
         <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi augue, euismod id purus sed, dignissim dignissim arcu. Nunc facilisis purus a dignissim faucibus. 
               Pellentesque nec semper sapien. Quisque elementum quam metus, sit amet placerat nulla vulputate eu. Sed nec volutpat elit, sed mattis nunc. 
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inc</p>
            <div class="signUp">
               <a href="#" class="signupButton">Sign Up</a>
            </div>
         </div>
      </div>
      <div id="form">
         <h3>Sign Up</h3>
         <form method="POST">
            <input id="name" type="text" placeholder="name" required>
            <input id="email" type="email" placeholder="email" required>
            <input id="tel" type="tel" placeholder="phone" required>
            <input type="submit" id="submit" value="Submit">
         </form>
      </div>
   </section>
   <div id="formBg"></div>
</section>
