<?php if(!defined("OUI")) exit; ?>

<!-- heroBanner -->
<section class="heroBanner">
   <h1>café avec une touche française</h1>
</section>
<!-- products -->
<section class="products">
   <h2>Our french products</h2>
   <div class="productFlex">
      <div class="product">
         <img src="images/croissant1.jpg" alt="croissant francais">
         <h3>Croissant</h3>
      </div>
      <div class="product">
         <img src="images/coffeeBeans1.jpg" alt="coffee francais">
         <h3>Coffee</h3>
      </div>
      <div class="product">
         <img src="images/baguette.jpeg" alt="baguette francais">
         <h3>Baguette</h3>
      </div>
      <div class="product">
         <img src="images/macaron1.jpg" alt="macaron francais">
         <h3>Macaron</h3>
      </div>
   </div>
</section>
<!--Instructions section-->
<section class="homeInstructionsBox">
   <h2 class="instructionsTitle">Instructions</h2>
   <div class="instructionsFlex">
      <img src="images/bakeCroissant.jpg" alt="Making croissants" class="bakeCroissantsImg">
      <div class="textImgFlex">
         <div>
            <p>Want to bake croissants like we do?</p>
            <p>Then sign up for our lessons.</p>
			<!--insert the lessons page into location.href = '' -->
         </div>
         <button type="button" class="toLessonsBtn" onclick="location.href='index.php?page=home'">Go to lessons</button>
      </div>
   </div>
</section>