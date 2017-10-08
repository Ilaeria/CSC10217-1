<?php

include_once 'connectdb.php';
require_once 'dropdowns.php';

function displayMovies($movieView) {
    $db = getDBConnection();

    switch ($movieView) {
        case "allMovies":
                $sql = "SELECT * FROM `movie_detail_view`";
                if ($result = $db->query($sql)) {
                    if ($result->fetchColumn() > 0) {
                        $sql = "SELECT * FROM `movie_detail_view` ORDER BY `movie_detail_view`.`title` ASC";
                        foreach ($db->query($sql) as $row) {
                            print
                                "<fieldset>" .
                                "<legend>" .  $row['title'] . "</legend>" .
                                "<span id='movieRentalPeriod'>" . $row['rental_period'] . " Rental </span><br>" .
                                "<span class='movieHeading'>Genre: </span>" . $row['genre'] . "<br>" .
                                "<span class='movieHeading'>Year: </span>" . $row['year'] . "<br>" .
                                "<span class='movieHeading'>Director: </span>" . $row['director'] . "<br>" .
                                "<span class='movieHeading'>Classification: </span>" . $row['classification'] . "<br>" .
                                "<span class='movieHeading'>Starring: </span>" . $row['star1'] . ", " . $row['star2'] . ", " . $row['star3'] . ", " . $row['costar1'] . ", " . $row['costar2'] . ", " . $row['costar3'] . ", " . "<br>" .
                                "<span class='movieHeading'>Studio: </span>" . $row['studio'] . "<br>" .
                                "<span class='movieHeading'>Tagline: </span>" . $row['tagline'] . "<br>" .
                                "<p>" . $row['plot'] . "</p>" .
                                "<span class='movieHeading'>Rental: </span>DVD - $" . $row['DVD_rental_price'] . " BluRay - $" . $row['BluRay_rental_price'] . "<br>" .
                                "<span class='movieHeading'>Purchase: </span>DVD - $" . $row['DVD_purchase_price'] . " BluRay - $" . $row['BluRay_purchase_price'] . "<br>" .
                                "<span class='movieHeading'>Availability: </span>DVD - " . ($row['numDVD']-$row['numDVDout']) . " BluRay - " . ($row['numBluRay']-$row['numBluRayOut']) . "</fieldset>"
                            ;
                        }
                    }
                    else {
                        print "No rows matched the query.";
                    }
                }
            break;
        case "newReleases":
            $sql = "SELECT * FROM `movie_detail_view` WHERE `rental_period`='Overnight'";
            if ($result = $db->query($sql)) {
                if ($result->fetchColumn() > 0) {
                    $sql = "SELECT * FROM `movie_detail_view` WHERE `rental_period`='Overnight' ORDER BY `title` ASC";
                    foreach ($db->query($sql) as $row) {
                        print
                            "<fieldset>" .
                            "<legend>" .  $row['title'] . "</legend>" .
                            "<span id='movieRentalPeriod'>" . $row['rental_period'] . " Rental </span><br>" .
                            "<span class='movieHeading'>Genre: </span>" . $row['genre'] . "<br>" .
                            "<span class='movieHeading'>Year: </span>" . $row['year'] . "<br>" .
                            "<span class='movieHeading'>Director: </span>" . $row['director'] . "<br>" .
                            "<span class='movieHeading'>Classification: </span>" . $row['classification'] . "<br>" .
                            "<span class='movieHeading'>Starring: </span>" . $row['star1'] . ", " . $row['star2'] . ", " . $row['star3'] . ", " . $row['costar1'] . ", " . $row['costar2'] . ", " . $row['costar3'] . ", " . "<br>" .
                            "<span class='movieHeading'>Studio: </span>" . $row['studio'] . "<br>" .
                            "<span class='movieHeading'>Tagline: </span>" . $row['tagline'] . "<br>" .
                            "<p>" . $row['plot'] . "</p>" .
                            "<span class='movieHeading'>Rental: </span>DVD - $" . $row['DVD_rental_price'] . " BluRay - $" . $row['BluRay_rental_price'] . "<br>" .
                            "<span class='movieHeading'>Purchase: </span>DVD - $" . $row['DVD_purchase_price'] . " BluRay - $" . $row['BluRay_purchase_price'] . "<br>" .
                            "<span class='movieHeading'>Availability: </span>DVD - " . ($row['numDVD']-$row['numDVDout']) . " BluRay - " . ($row['numBluRay']-$row['numBluRayOut']) . "</fieldset>"
                        ;
                    }
                }
                else {
                    print "No rows matched the query.";
                }
            }
            break;
        case "actor":
            print "<h4>Select Actor:</h4>";
            print "<form method='get' name='moviezone_search' id='moviezone_search' action='moviezone.php?actor'>" .
                    "<input type = 'hidden' name='search' value='actorsearch' />" .
                    "<select name='id'>" .
                    "<option value='' disabled selected>Select...</option>";
            getActor();
            print "<input type='submit' value='Search'/></form>";
        //TODO: Make this work
        case "actorSearch":
            $result = "Actor results go here";
            break;
        default:
            $result="The switch didn't work!";
    }
    $db = null;

    return $result;
}