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
   </head>
   <body>
      <div class="gridContainer">
         <header>
            <img class="logo" src="images/logo.svg" alt="logo">
            <nav>
               <ul> 
                  <li><a href="index.php?page=menu">Menu</a></li>
                  <li><a href="index.php?page=findUs">Find Us</a></li>
                  <li><a href="index.php?page=aboutUs">About Us</a></li>
                  <li><a href="index.php?page=instruction">Instruction</a></li>
               </ul>
            </nav>
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
