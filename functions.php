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

//Function to Delete Artist By Artist ID
function delete_artist_by_id($value) {

    global $db;

    $query = 'DELETE FROM artists
                  WHERE artistID = :artistID ';
    $statement = $db->prepare($query);
    $statement->bindValue(':artistID', $value);
    $success = $statement->execute();
    $statement->closeCursor();

}

/*
* RELEASE SECTION
*/

//Function to Add Release
function add_release($release_name, $artist_name, $release_year, $purchase_url, $image_url) {

global $db;

    $query = 'INSERT INTO releases
                 (releaseID, artistName, releaseName, releaseYear, purchaseURL, imageURL)
              VALUES
                 (DEFAULT, :artist_name, :release_name, :release_year, :purchase_url, :image_url)';

    $statement = $db->prepare($query);
    $statement->bindValue(':artist_name', $artist_name);
        $statement->bindValue(':release_name', $release_name);
    $statement->bindValue(':release_year', $release_year);
    $statement->bindValue(':purchase_url', $purchase_url);
    $statement->bindValue(':image_url', $image_url);
    $statement->execute();
    $statement->closeCursor();

}

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

    $query = 'SELECT * FROM releases';
    $statement = $db->prepare($query);
    $statement->execute();
    $releases = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $releases;

}

//Function to Delete Release By Release ID
function delete_release_by_id($value) {

    global $db;

    $query = 'DELETE FROM releases
                  WHERE releaseID = :releaseID ';
    $statement = $db->prepare($query);
    $statement->bindValue(':releaseID', $value);
    $success = $statement->execute();
    $statement->closeCursor();

}

?>