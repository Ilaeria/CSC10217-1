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
      This is only an example - so you can see the join form working....
      </div>
        <?php include 'html_includes/footer.inc'; ?>
   </div>
</body>
</html>