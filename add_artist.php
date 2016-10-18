<?php

// Input Items
$artistName = filter_input(INPUT_POST, 'artistName');
$artistBio = filter_input(INPUT_POST, 'artistBio');

require_once ('database.php');

global $db;
//Query
    $query = 'INSERT INTO artists
        (artistID, artistName, artistBio)
        VALUES
        (DEFAULT, :artistName, :artistBio)';
    $statement = $db->prepare($query);
    $statement->bindValue(':artistName', $artistName);
    $statement->bindValue(':artistBio', $artistBio);
    $statement->execute();
    $statement->closeCursor();

include ('artists.php');

?>