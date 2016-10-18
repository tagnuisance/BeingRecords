<?php

//FUNCTIONS

/*
* ARTIST SECTION
*/

//Function to Get All Artists
function get_all_artists () {

global $db;
$query = 'SELECT * FROM artists';
$statement = $db->prepare($query);
$statement->execute();
$artists = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement->closeCursor();

return $artists;
}

//Function to Get All Artist Info by Specified Name
function get_artist_by_name ($value) {

global $db;
$query = 'SELECT * FROM artists WHERE artistName = :artistName';
$statement = $db->prepare($query);
$statement->bindValue(':artistName', $value);
$statement->execute();
$artists = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement->closeCursor();

return $artists;
}

/*
* RELEASE SECTION
*/

//Function to get Releases with a Specified Artist Name
function get_all_releases_by_artist_name ($value) {

global $db;
$query = 'SELECT * FROM releases WHERE artistName = :artistName';
$statement = $db->prepare($query);
$statement->bindValue(':artistName', $value);
$statement->execute();
$releases = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement->closeCursor();

return $releases;
}

//Function to Get all Releases
function get_all_releases () {

global $db;
//must return all courses
$query = 'SELECT * FROM releases';
$statement = $db->prepare($query);
$statement->execute();
$releases = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement->closeCursor();

return $releases;

}

function add_release () {

global $db;

// Input Items
$artistName = filter_input(INPUT_POST, 'artistName');
$releaseName = filter_input(INPUT_POST, 'releaseName');
$releaseYear = filter_input(INPUT_POST, 'releaseYear');
$purchaseURL = filter_input(INPUT_POST, 'purchaseURL');
$imageURL = filter_input(INPUT_POST, 'imageURL');

//Query
$query = 'INSERT INTO releases
(releaseID, artistName, releaseName, releaseYear, purchaseURL, imageURL)
VALUES
(DEFAULT, :artistName, :releaseName, :releaseYear, :purchaseURL, :imageURL)';;
$statement = $db->prepare($query);
$statement->bindValue(':artistName', $artistName);
$statement->bindValue(':releaseName', $releaseName);
$statement->bindValue(':releaseYear', $releaseYear);
$statement->bindValue(':purchaseURL', $purchaseURL);
$statement->bindValue(':imageURL', $imageURL);
$statement->execute();
$statement->closeCursor();
}

?>