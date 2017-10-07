<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edge of Tomorrow DVD Rentals - Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/palette.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto">
    <meta name="description" content="Edge of Tomorrow DVD Rentals.">
    <script src="js/validation.js"></script>
</head>
<body>
    <div id="container">
        <?php include 'html_includes/header_nav.inc'; ?>
        <script type = "text/javascript">
            document.getElementById("joinNav").className = "currentpage";
        </script>
        <aside>
            <h3>Latest release</h3>
            <img src="images/gotg2.jpg" alt="Latest release - Guardians of the Galaxy Vol. 2">
            <p>
                Our latest release - Guardians of the Galaxy Vol 2.
            </p>
            <p class="copyrightnotice">
                Image courtesy <a href="http://www.imdb.com/title/tt3896198/mediaviewer/rm911094272">imdb.com</a>
            </p>
        </aside>
        <main>
            <?php
            if(isset($_POST['submit'])){
                print "<h2>Status</h2>";
                include_once 'php_includes/validateUser.php';
                if(ValidateUserForm($_POST)) {
                    include_once 'php_includes/createUser.php';
                    $queryResult = createUser($_POST);
                    if($queryResult['succeeded']){
                        print
                            "<p>Congratulations $_POST[othernames], you have successfully joined Edge of Tomorrow DVD Rentals!
                            <br><a href='moviezone.php'>Click here to login to the MovieZone!</a></p>";
                    }
                    else {
                        print
                            "<p>There was an error creating your account. Please contact the site administrator.</p>
                            <p>Error message: $queryResult[error]</p>";
                    }
                }
            }
            else
                include 'html_includes/join_form.inc';
            ?>
        </main>
        <?php include 'html_includes/footer.inc'; ?>
    </div>
</body>
<script>
    var today = (new Date()).toISOString().substring(0, 10);
    document.getElementById("joindate").value = today;
</script>
</html>