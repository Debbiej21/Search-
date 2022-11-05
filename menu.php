<?php
$page_title = "Menu";
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
        <div class="banner">
          <div class="wrapper">
              <h3>Edu <span>Search</span></h3>
              <br>
              
                <div class="search">
                    <input type="text" placeholder="Search.." id="input" onchange="fetchData()"/>
                    <div class="autocom-box" id="dropdown" autocomplete="off"></div>
                    <div class="icon">
<!--                        <input type="submit" name="submit"/>-->
                        <i class="fa fa-search"></i>
                    </div>
                </div>
<!--              <div class="autocom-box" id="dropdown" autocomplete="off"></div>-->
          </div>
        </div>
        
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
        
        <h1>Learning Topics</h1><br>

        <div class="content">
            <div class="container text-center">
                    <div class="row">
                      <div class="col abouttext">
                          <h5>Want To An Effective Learning?</h5>
                          <p>Click the button below to find interesting education videos.</p>
                          <a href="#" target="_blank">Read More</a>
                      </div>
                      <div class="col pic">
                        <img src="robot8.png" alt="Robot Book" width="250" height="250">
                      </div>
                    </div>
            </div>
        </div>
        
        <h1>Quiz</h1><br>

        <div class="content">
            <div class="container text-center">
                    <div class="row">
                      <div class="col pic">
                        <img src="robot4.png" alt="Robot Quiz" width="230" height="250">
                      </div>
                      <div class="col abouttext">
                          <h5>Enthusiastic For Challenges?</h5>
                          <p>Click the button below to find out more interesting education quizzes recommended by our team. </p>
                          <a href="#" target="_blank">Read More</a>
                      </div>
                    </div>
            </div>
        </div>
        
        <h1>School</h1><br>

        <div class="content">
            <div class="container text-center">
                     <div class="row">
                      <div class="col abouttext">
                          <h5>Still Planning Which School To Go?</h5>
                          <p>Click the button below to find out which school best fit for you.</p>
                          <a href="#" target="_blank">Read More</a>
                      </div>
                      <div class="col pic">
                        <img src="robot3.png" alt="Robot Phone" width="250" height="250">
                      </div>
                    </div>
            </div>
        </div>
        <br>
        <br>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
               function fetchData(){
                   var s = $("#input").val();
                   if(s === ''){
                       $('#dropdown').css('display','none');
                   }
                   $.post("api/auto_complet.php", 
                   {
                      s:s 
                   }, 
                   function(data, status){
                      if(data != "not found"){
                          $('#dropdown').html(data).css('display','block');
                     }else{
                         $('#dropdown').html("").css('display','none');
                     }
                      console.log(data);
                     
                       
                   });
               }
               
               $('#input').on('input',fetchData);
               $("body").on('click',()=>{
                   $('#dropdown').css('display','none');
               });
               $('#input').on('click',fetchData);
            });
        </script> 
    </body>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</html>
