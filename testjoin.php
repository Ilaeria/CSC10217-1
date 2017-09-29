<!-- TODO: Remove this file -->

<!DOCTYPE html>
<html lang = "en">
<head>
   <title>Join - DVD Emporium</title>
   <meta charset = "utf-8" />
   <link href = "css/emporium.css" rel = "stylesheet" type = "text/css" />   
   <script type = "text/javascript" src = "scripts/form_validation.js"></script>
</head>
<body>
   <div id = "wrapper">
      <!-- Loads the standard nav header and sets
           the correct nav button as the current page -->
      <?php include 'html_includes/header_nav.inc'; ?>
      <script type = "text/javascript">
          document.getElementById("joinNav").className = "currentpage";  
      </script> 
      <div id = "leftcol">
         <h2> New Releases</h2>
         <p> Here I included my New Release advertisements</p>
      </div>
      <div id = "rightcol">
         <?php
            //If the access method was post then process the form
            if(isset($_POST['submit'])){
               
               // For DEBUG
               //print "<h2>POST result</h2>";
               //$formdata = $_POST;
               //foreach ($formdata as $element => $value)
               //  print "$element : $value <br />\n";
                   
               print "<h2>Status</h2>";
               include_once 'php_includes/validateUser.php';
               if(ValidateUserForm($_POST)) { // all entered data good
                  include_once 'php_includes/createUser.php';
                  $queryResult = createUser($_POST); // add time to this    
                  //See if the creation worked.
                  if($queryResult['succeeded']){
                     //Success message
                     print "<p class = 'centre'>Congratulations $_POST[othername] 
                            you have successfully signed up at the DVD Emporium and can 
                            now book movies!<br><a href='moviezone.php'>Would you like to
                            go to the MovieZone page and Log In?</a></p>";

                  }
                  else {
                     //Failure message
                     print "<p class = 'centre'>There was a database failure while 
                           creating your user account. Please contact the site administrator.
                           </p> <p class = 'centre'>Error message: $queryResult[error]</p>";
                  }
               } 
            }
            else
                  include 'html_includes/join_form.inc';                  
         ?>
      </div>
        <?php include 'html_includes/footer.inc'; ?>
   </div>
</body>
</html>