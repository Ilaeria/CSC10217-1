<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edge of Tomorrow DVD Rentals - Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/palette.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto">
    <meta name="description" content="Edge of Tomorrow DVD Rentals.">
</head>
<body>
    <div id="container">
        <?php include 'html_includes/header_nav.inc'; ?>
        <script type = "text/javascript">
            document.getElementById("moviezoneNav").className = "currentpage";
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
            <h1>MovieZone</h1>
            <h2>Search</h2>
            <div id='moviezone_nav'>
                <ul>
                    <li><a href='moviezone.php?allMovies'>Show All Movies</a></li>
                    <li><a href='moviezone.php?newReleases'>New Releases</a></li>
                    <li><a href='moviezone.php?actor'>Search by Actor</a></li>
                    <li><a href='moviezone.php?director'>Search by Director</a></li>
                    <li><a href='moviezone.php?genre'>Search by Genre</a></li>
                    <li><a href='moviezone.php?classification'>Search by Classification</a></li>
                </ul>
                <h2>User Menu</h2>
                <ul>
                    <li><a href='booking.php'>Log In</a></li>
                    <li><a href='index.php'>Logout</a></li>
                    <li><a href='admin.php'>Admin</a></li>
                </ul>
            </div>
            <?php
            $movieSearch = $_SERVER['QUERY_STRING'];

            include_once 'php_includes/movies.php';
            if ($movieSearch == "newReleases"){
                print "<h3>New Releases</h3>";
                $result = displayMovies("newReleases");
            }elseif($movieSearch == "allMovies"){
                print "<h3>All Movies</h3>";
                $result = displayMovies("allMovies");
            }elseif($movieSearch == "actor") {
                print "<h3>Search Actor</h3>";
                $result = displayMovies("actor");
            }elseif(preg_match('/^.+actorsearch.+$/',$movieSearch)) {
                print "<h3>Actor Search Result</h3>";
                $result = displayMovies("actorSearch");
            }elseif($movieSearch == "director"){
                print "<h3>Search Director</h3>";
                $result = displayMovies("director");
            }elseif($movieSearch == "genre"){
                print "<h3>Search Genre</h3>";
                $result = displayMovies("genre");
            }elseif($movieSearch == "classification") {
                print "<h3>Search Classification</h3>";
                $result = displayMovies("classification");
            }else
                print "<h3>New Releases (Default View)</h3>";
                print $movieSearch;
                $result = displayMovies("newReleases");
            ?>
        </main>
        <?php include 'html_includes/footer.inc'; ?>
    </div>
</body>
</html>