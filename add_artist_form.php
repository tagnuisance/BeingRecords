<?php

?>

<!DOCTYPE html>

<html>

<head>
    <title>Add Artist</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>

    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="artists.php">Artists</a></li>
            <li><a href="releases.php">Releases</a></li>
            <li><a href="contact.php">Contact</a>
        </ul>
    </div>

    <h1>Add Artist</h1>

    <div class="addForm">

        <form action="add_artist.php" method="POST">

            <label>Artist Name</label>
            <input type="text"name="artistName"><br>

            <label>Artist Bio</label>
            <input type="text" name="artistBio"><br>

            <input type="submit" value="Add Artist"><br>

        </form>

    </div>

</html>
