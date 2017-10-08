<?php

include_once 'connectdb.php';

function getActor()
{
    $db = getDBConnection();
    $sql = "SELECT * FROM `actor`";
    if ($result = $db->query($sql)) {}
        if ($result->fetchColumn() > 0) {
            $sql = "SELECT * FROM `actor` ORDER BY `actor_name` ASC";
        foreach ($db->query($sql) as $row) {
            print "<option value='" . $row[actor_id] . "'>" . $row[actor_name] . "</option>";
        }
    } else {
        print "<option value='error'>There was an error retrieving the actors</option>";
    }
    $db = null;
}