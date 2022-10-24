<?php
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
      <link rel="stylesheet" href="style/styles.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
      <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
      <link rel="icon" type="image/png" href="/images/favicon.png">
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
