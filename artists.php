<?php

//Include Api
require_once ('rest.php');

//Check for artistName
if (isset($_GET["artistName"])) {
    //If Set - get info for that artist
    $artists = get_artist_by_name($_GET["artistName"]);
} else
    //If not set - return all artists - ok?
    $artists = get_all_artists();

?>

<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/main.css">
<title>Artists</title>

<body>

<div id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="artists.php">Artists</a></li>
        <li><a href="releases.php">Releases</a></li>
        <li><a href="contact.php">Contact</a>
    </ul>
</div>

<h1>Artists</h1>

<h2>Current Roster</h2>

<div id="artistDisplay">
    <table class="table">
        <tr>
            <th>Artist</th>
            <th>Bio</th>
            <th></th>
        </tr>
        <?php foreach ($artists as $artist): ?>
            <tr>
                <td><?php echo $artist['artistName']; ?></td>
                <td><?php echo $artist['artistBio']; ?></td>
<!--                Admin Code for Deleting-->
<!--                <form action="delete_artist.php" method="post">-->
<!--                    <input type="hidden" name="artist_id"-->
<!--                           value="--><?php //echo $artist['artistID']; ?><!--">-->
<!--                    <td><input type="submit" value="Delete"> </input></td>-->
<!--                </form>-->
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
</div>

<!--@TODO - this should only be available for authenticated users-->
<!--<h2><a href="add_artist_form.php">Add Artist</a></h2>-->



</body>

</html>
