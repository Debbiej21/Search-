<?php
$page_title = "Quiz";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="menu.css">
    </head>

    <header>
        <?php
        include 'header.php';
        ?>
    </header>

    <body>
         <?php include "fontawsome.php"?>
        
        
        <h1>About Us</h1><br>

        <div class="content">
            <div class="container text-center">
                    <div class="row">
                      <div class="col pic">
                        <img src="robot2.png" alt="Happy Robot" width="200" height="250">
                      </div>
                      <div class="col abouttext">
                          <h5>Edu Hub</h5>
                          <p>Edu Hub is a humble hub platform unlike any other educational website. Why? Because Edu Hub's main goal is to provide education to all students within the primary or secondary level to access different sources of education platform, videos, etc.</p>
                         
                      </div>
                    </div>
            </div>
        </div>
        
      
    </body>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</html>

