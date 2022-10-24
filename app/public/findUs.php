<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>OUI</title>
      <link rel="stylesheet" href="style/styles.css">
      <!-- leaflet libary -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="">
      <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
      <script src="script/map.js"></script>
   </head>
   <body>
      <div class="gridContainer">
         <header>
            <img src="images/logo.svg" alt="logo" id="logo">
            <nav>
               <ul> 
                  <li>Menu</li>
                  <li>Find Us</li>
                  <li>About Us</li>
                  <li>Instruction</li>
               </ul>
            </nav>
         </header>
         <main>
         <h2 id="findUsHeading"> Visit us!</h2>
         <!-- Google Maps frame -->
         <div class="subGrid">
            <div class="mapsFrame">
               <div id="map"></div>
            </div>
            <!-- Side content -->
            <section class="sideContent">
               <div id="contactContainer">
               <h4>Contactdetails:</h4>
                  <div>
                     <p>OUI Coffee shop</p>
                     <p>A.L. Lesturgeonstraat 3,</p>
                     <p>7815 VD Emmen</p>
                  </div>
                  <div id="emailBlock">
                     <p class="boldParagraph">Email:</p>
                     <p>OUI@frenchauthenticcoffeeshop.lelele</p>
                     <p class="boldParagraph">Phonenumber:</p>
                     <p>+31 112 113 1114</p>
                  </div>
               </div>
               <div>
                  <h4>Working hours:</h4>
                  <table>
                     <tr><td>Monday:</td><td>8:00-15:00</td></tr>
                     <tr><td>Tuesday:</td><td>8:00-18:00</td></tr>
                     <tr><td>Wednesday:</td><td>8:00-18:00</td></tr>
                     <tr><td>Thursday:</td><td>8:00-15:00</td></tr>
                     <tr><td>Friday:</td><td>8:00-18:00</td></tr>
                     <tr><td>Saturday:</td><td>8:00-16:00</td></tr>
                     <tr><td>Sunday:</td><td>8:00-16:00</td></tr>
                  </table>
               </div>
            </section>
         </div>
         </main>
         <footer>

         </footer>
      </div>
   </body>
</html>