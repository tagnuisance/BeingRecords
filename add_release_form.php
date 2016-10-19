<?php
/**
 * Created by PhpStorm.
 * User: n0195014
 * Date: 10/17/16
 * Time: 3:16 PM
 */

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <title>Being Records - Established 2015</title>
</head>

<html>

    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="artists.php">Artists</a></li>
            <li><a href="releases.php">Releases</a></li>
            <li><a href="contact.php">Contact</a>
        </ul>
    </div>

    <h1>Add Release</h1>

    <div class="addForm">

        <form action="add_release.php" method="post">

            <label>Release Name</label>
            <input type="text"name="release_name"><br>

            <label>Artist Name</label>
            <input type="text" name="artist_name"><br>

            <label>Release Year</label>
            <input type="text" name="release_year"><br>

            <label>Image URL</label>
            <input type="text" name="image_url"><br>

            <label>Purchase URL</label>
            <input type="text" name="purchase_url"><br>

            <input class="addButton" type="submit" value="Add Release"><br>

        </form>

    </div>

</html>
