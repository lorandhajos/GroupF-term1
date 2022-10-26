<?php
   define("OUI", "");
   if (isset($_GET['page'])) {
      $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
   }
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>OUI</title>
      <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
      <link rel="icon" type="image/png" href="/images/favicon.png">
      <link rel="stylesheet" href="style/styles.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
      <!-- leaflet libary -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="">
      <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
      <script src="script/map.js" defer></script>
      <script src="script/form.js" defer></script>
   </head>
   <body>
      <div class="gridContainer">
         <header>
            <?php include 'header.php'; ?>
         </header>
         <main>
            <?php
               if (isset($_GET['page'])) {
                  switch($page) {
                     case "menu":
                     include("menu.php");
                     break;

                     case "findUs":
                     include("findUs.php");
                     break;

                     case "aboutUs":
                     include("aboutUs.php");
                     break;

                     case "instruction":
                     include("instruction.php");
                     break;

                     default:
                     include("home.php");
                  }
               } else {
                  include("home.php");
               }
            ?>
         </main>
         <footer>
            <?php include("footer.php"); ?>
         </footer>
      </div>
   </body>
</html>
