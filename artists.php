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

<div id="artistDisplay">
    <table>
        <tr>
            <th>Artist</th>
            <th>Bio</th>
        </tr>
        <?php foreach ($artists as $artist): ?>
            <tr>
                <td><?php echo $artist['artistName']; ?></td>
                <td><?php echo $artist['artistBio']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<a href="add_artist_form.php">Add Artist</a>

</body>

</html>
