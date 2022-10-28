<?php if(!defined("OUI")) exit; ?>

<!-- List of recipes -->
<section class="instruction">
   <h1>Instruction</h1>
   <section class="recipes">
      <h2>Recipes</h2>
      <div class="recipe first">
         <img src="images/coffeeBeans1.jpg" alt="Steming coffee is being pured from a french press into a glass cup">
         <h3 class="hidden">How do I make good french coffee?</h3>
         <div class="content">
            <div>
               <h3 class="visible">How do I make good french coffee?</h3>
               <p>Click on learn more to get the real authentic french coffee experience</p>
            </div>
            <a href="index.php?page=frenchCoffee" class="button">Learn More</a>
         </div>
      </div>
      <div class="recipe last">
         <img src="images/croissant2.jpg" alt="Coffee">
         <h3 class="hidden">How do I make good french pastry?</h3>
         <div class="content">
            <div>
               <h3 class="visible">How do I make good french pastry?</h3>
               <p>Click on learn more to get the real authentic croissant baking experience</p>
            </div>
            <a href="index.php?page=croissant" class="button">Learn More</a>
         </div>
      </div>
   </section>
   <section class="lessonContent">
      <h2>Lessons</h2>
      <div>
         <div>
            <p>Having trouble following instructions online? Maybe our weekly lessons on how to do french specialties! Or if you are just bored you are also welcome to join our course, just fill out the sign up form and visit us!</p>
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
